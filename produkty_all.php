<!DOCTYPE html>
<html lang="pl-PL">


<head>
  <?php include 'head.php'; ?>
  <title>Produkty</title>
</head>

<body>


  <div class="container-fluid p-0">
    <?php include 'header.php'; ?>
    <div class="container">
      <form method="post">
        <select class="form-select" aria-label="Sortowanie" name="sort" style=" width:200px" onchange="this.form.submit();">
          <option selected value="">Sortuj</option>
          <option value="asc">Najniższa cena</option>
          <option value="desc">Najwyższa cena</option>
        </select>
        <br>
        <form method="post">
          <div class="input-group d-flex filtracja" style="width: 20%;">
            <span class="input-group-text" id="">Cena od</span>
            <input min="1" type="number" value="" name="cenamin" class="form-control">
            <span class="input-group-text" id="">do</span>
            <input min="1" type="number" value="" name="cenamax" class="form-control">
          </div>
          <br>
          <input type="submit" name="filtruj" value="Filtruj" class="purpleBttn">

        </form>
      </form>
      </form>
      <?php
      $szukaj_fraza = "";
      if (isset($_POST['szukajbutton'])) {
        $szukaj_fraza = $_POST['szukanie'];
        if ($szukaj_fraza == "") {
          echo '<h1>Wszystkie produkty</h1>';
        } else {
          echo '<h1>Wyniki wyszukiwania dla: ' . $szukaj_fraza . '</h1>';
        }
      }
      ?>

    </div>
    <br>
    <div class="container-lg">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col produktybox">
        <?php
        $sortuj = '';
        $order_by = '';
        $min = '';
        $max = '';
        $od = '';
        $do = '';
        if (isset($_POST['filtruj'])) {
          $min = $_POST['cenamin'];
          $max = $_POST['cenamax'];
          if ($min != "") {
            $od = "and cena > $min";
          }
          if ($max != "") {
            $od = "and cena < $max";
          }
        }
        $warunek = '';
        if ($szukaj_fraza != '') {
          $warunek =
            "where nazwa_produktu like '%" . $szukaj_fraza . "%'";
        }

        if (isset($_POST['sort'])) {
          $sortuj = $_POST['sort'];
          $order_by = 'order by cena ';
        }
        $produkt = mysqli_query(
          $lacz,
          "SELECT produktID,nazwa_produktu, cena, img_url, nazwa_kategorii, promocja from produkty inner join kategorie on produkty.kategoriaID = kategorie.kategoriaID $warunek $order_by $sortuj"
        );

        while ($row = @mysqli_fetch_array($produkt)) {
          $sumuj_ilosc = mysqli_query($lacz, 'SELECT sum(ilosc) as suma_ilosc FROM szczegoly_produktu WHERE produktID=' . $row['produktID'] . '');
          $sumuj_ilosc_array = mysqli_fetch_array($sumuj_ilosc);
          if (intval($sumuj_ilosc_array['suma_ilosc']) > 0) {
            echo '<div class="col cardpordukt">';
            echo '<a href="Produkt.php?produktID=' . $row['produktID'] . '">';
            echo '<div class="card shadow-sm">';
            echo '<img src="' . $row['img_url'] . '">';
            echo '<h4>' . $row['nazwa_produktu'] . '</h4>';
            echo '<p>' . $row['nazwa_kategorii'] . '</p>';

            if ($row['promocja'] > 0) {
              echo '<h5><s>' . $row['cena'] . '</s> ' . $row['promocja'] . '</h5>';
            } else {
              echo '<h5>' . $row['cena'] . '</h5>';
            }

            echo '</div>';
            echo '</a>';
            echo '</div>';
          }
        }
        ?>

      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>