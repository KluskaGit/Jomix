<html>

<head>
  <?php include 'head.php' ?>
  <title>Produkty</title>
</head>

<body>
  <div class="container-fluid p-0">
    <?php include 'header.php';

    $katID = $_GET['katID'];
    $nazwa_kategorii = mysqli_query($lacz, "SELECT nazwa_kategorii from kategorie where kategoriaID=$katID");
    ?>
    <div class="container-lg">
      <h1><?php while ($x = @mysqli_fetch_array($nazwa_kategorii)) {
            echo $x['nazwa_kategorii'];
          } ?></h1>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col produktybox">
        <?php
        $produkt = mysqli_query($lacz, "SELECT produktID,nazwa_produktu, cena, img_url, nazwa_kategorii, promocja from produkty inner join kategorie on produkty.kategoriaID = kategorie.kategoriaID  where produkty.kategoriaID=$katID");

        while ($row = @mysqli_fetch_array($produkt)) {

          echo '<div class="col cardpordukt">';
          echo '<a href="Produkt.php?produktID=' . $row['produktID'] . '">';
          echo    '<div class="card shadow-sm">';
          echo      '<img src="' . $row['img_url'] . '">';
          echo      '<h4>' . $row['nazwa_produktu'] . '</h4>';
          echo      '<p>' . $row['nazwa_kategorii'] . '</p>';

          if ($row['promocja'] > 0) {
            echo '<h5><s>' . $row['cena'] . '</s> ' . $row['promocja'] . '</h5>';
          } else {
            echo     '<h5>' . $row['cena'] . '</h5>';
          }



          echo    '</div>';
          echo  '</a>';
          echo '</div>';
        }
        ?>

      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>