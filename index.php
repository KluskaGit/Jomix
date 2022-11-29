<?php
  include("header.php");
?>

    <?php
      $ftp_server = "jomix.ct8.pl";
      $ftp = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server");
      ftp_login($ftp, 'f28441_jomixadmin', 'ZAQ!2wsx');
    ?>

    <div class="container" id="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="Pierwszy slajd">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Drugi slajd">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Trzeci slajd">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
      <br>
      <div class="album py-5 bg-light">
        <div class="container">
          <h1>NOWOŚCI</h1>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 col ">
            <div class="col" >
              <a href="#">
              <div class="card shadow-sm">
                  <img src="zdjecia/zakladka.jpg">
                  <h4 href="#">Nazwa produktu</h4>
                  <p>Kategoria</p>
                  <h5 href="#">79.99zł</h5>
                <div class=""> 
                </div>
              </div>
            </a>
            </div>
            <div class="col">
              <a href="#">
                <div class="card shadow-sm">
                    <img src="zdjecia/zakladka.jpg">
                    <h4 href="#">Nazwa produktu</h4>
                    <p>Kategoria</p>
                    <h5 href="#">79.99zł</h5>
                  <div class=""> 
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="#">
                <div class="card shadow-sm">
                    <img src="zdjecia/zakladka.jpg">
                    <h4 href="#">Nazwa produktu</h4>
                    <p>Kategoria</p>
                    <h5 href="#">79.99zł</h5>
                  <div class=""> 
                  </div>
                </div>
              </a>
            </div>
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
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="absolute">
        <img src="zdjecia/atuty.jpg" class="img-fluid d-none d-lg-block w-100">
      </div>
      <div>
        <img src="zdjecia/atuty_telefony.jpg" class="img-fluid d-lg-none w-100">
      </div>

      <div>
        <img src="zdjecia/baner.jpg" class="img-fluid w-100">
      </div>

      <div class="b-example-divider"></div>

      <div class="container">
        <footer class="row row-cols-5 py-5 my-5 border-top">
          <div class="col">
      
          </div>
      
          <div class="col">
            <h4>Konto</h4>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twoje konto</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Zarejestruj się</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Zamówienia</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Koszyk</a></li>
            </ul>
          </div>
      
          <div class="col">
            <h4>Informacje</h4>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Regulamin sklepu</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Warunki dostawy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Polityka zwrotów</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Polityka prywatności</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kontakt</a></li>
            </ul>
          </div>
      
          <div class="col">
            <h4>Kategorie</h4>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bluzki</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bluzy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Komplety</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Spódnice</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Spodnie</a></li>
            </ul>
          </div>
        </footer>
      </div>
      
      <div class="b-example-divider"></div>
</section>
<script src="jquery-3.6.0.js"></script>
<script src="jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
