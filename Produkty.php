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
      <h1><?php while ($x = @mysqli_fetch_array($nazwa_kategorii)) { echo $x['nazwa_kategorii']; } ?></h1>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col">

        <div class="col">
          <a href="Produkt.php">
            <div class="card shadow-sm">
              <img src="zdjecia/produkt.jpg">
              <h4>Nazwa produktu</h4>
              <p>Kategoria</p>
              <h5>79.99zł</h5>
            </div>
          </a>
        </div>


      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>