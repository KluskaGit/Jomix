<html>

<head>
  <?php include 'head.php'; ?>
  <title>Strona główna</title>
</head>

<body>
  <div class="container-fluid p-0">
    <?php include("header.php"); ?>
    <div class="container-lg">


      <h1>NOWOŚCI</h1>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 col ">

        <div class="col">
          <a href="#">
            <div class="card shadow-sm">
              <img src="zdjecia/zakladka.jpg">
              <h4 href="#">Nazwa produktu</h4>
              <p>Kategoria</p>
              <h5 href="#">79.99zł</h5>
            </div>
          </a>
        </div>

      </div>
      <br>


      <div class="absolute">
        <img src="zdjecia/atuty.jpg" class="img-fluid d-none d-lg-block w-100">
      </div>

      <div>
        <img src="zdjecia/baner.jpg" class="img-fluid w-100">
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>