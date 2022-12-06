<html>

<head>
  <?php include 'head.php'; ?>
  <title>Produkty</title>
</head>

<body>


  <div class="container-fluid p-0">
    <?php include 'header.php'; ?>
    <div class="container">
      <form method="post">
        <select class="form-select" aria-label="Sortowanie" name="sort" style="float:right; width:200px" onchange="this.form.submit();">
          <option selected>Sortuj</option>
          <option value="asc">Najniższa cena</option>
          <option value="desc">Najwyższa cena</option>
        </select>
      </form>
      <?php
      $szukaj_fraza = '';
      if (isset($_POST['szukajbutton'])) {
        $szukaj_fraza = $_POST['szukanie'];
        if ($szukaj_fraza = !'') {
          echo '<h1>Wyniki wyszukiwania dla: ' . $szukaj_fraza . '</h1>';
        } else {
          echo '<h1>Wszystkie produkty</h1>';
        }
      }

      ?>
      <h1>Wszystkie produkty</h1>
    </div>

    <div class="container-lg">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col produktybox">
        <?php
        $sortuj = '';
        $order_by = '';
        $warunek = '';
        if ($szukaj_fraza = !'') {
          $warunek =
            "where nazwa_produktu like '%" . $_POST['szukanie'] . "%'";
        }

        if (isset($_POST['sort'])) {
          $sortuj = $_POST['sort'];
          $order_by = 'order by cena';
        }
        $produkt = mysqli_query(
          $lacz,
          "SELECT produktID,nazwa_produktu, cena, img_url, nazwa_kategorii, promocja from produkty inner join kategorie on produkty.kategoriaID = kategorie.kategoriaID $warunek $order_by $sortuj"
        );

        while ($row = @mysqli_fetch_array($produkt)) {
          echo '<div class="col cardpordukt">';
          echo '<a href="Produkt.php?produktID=' . $row['produktID'] . '">';
          echo '<div class="card shadow-sm">';
          echo '<img src="' . $row['img_url'] . '">';
          echo '<h4>' . $row['nazwa_produktu'] . '</h4>';
          echo '<p>' . $row['nazwa_kategorii'] . '</p>';

          if ($row['promocja'] > 0) {
            echo '<h5><s>' .
              $row['cena'] .
              '</s> ' .
              $row['promocja'] .
              '</h5>';
          } else {
            echo '<h5>' . $row['cena'] . '</h5>';
          }

          echo '</div>';
          echo '</a>';
          echo '</div>';
        }
        ?>

      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>