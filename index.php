<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
 <title>Jomix</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="jomix-300.png" width="100" height="50"/></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation">
      
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div id="naglowek">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="me-auto"></div> 
           <ul class="navbar-nav">
            <li class="nav-item" >
              <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="Produkty/Produkty.php">SUKIENKI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="Produkty/Produkty.php">BLUZKI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="Produkty/Produkty.php">BLUZY,KARDIGANY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="Produkty/Produkty.php">SPODNIE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="Produkty/Produkty.php">SPÓDNICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="Produkty/Produkty.php">KOMPLETY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="Koszyk/Koszyk.php"><img src="cart.png" width="30" height="30"></a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </nav>

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
          <h1 style="text-align:center; color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;">NOWOŚCI</h1>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 col ">
            <div class="col" >
              <a href="#" style="text-decoration: none;">
              <div class="card shadow-sm">
                  <img src="zakladka.jpg">
                  <h4 style="text-align:center; color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="#">Nazwa produktu</h4>
                  <p style="text-align:center;">Kategoria</p>
                  <h5 style="text-align:center; color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="#">79.99zł</h5>
                <div class=""> 
                </div>
              </div>
            </a>
            </div>
            <div class="col">
              <a href="#" style="text-decoration: none;">
                <div class="card shadow-sm">
                    <img src="zakladka.jpg">
                    <h4 style="text-align:center; color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="#">Nazwa produktu</h4>
                    <p style="text-align:center;">Kategoria</p>
                    <h5 style="text-align:center; color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="#">79.99zł</h5>
                  <div class=""> 
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="#" style="text-decoration: none;">
                <div class="card shadow-sm">
                    <img src="zakladka.jpg">
                    <h4 style="text-align:center; color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="#">Nazwa produktu</h4>
                    <p style="text-align:center;">Kategoria</p>
                    <h5 style="text-align:center; color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="#">79.99zł</h5>
                  <div class=""> 
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="#" style="text-decoration: none;">
              <div class="card shadow-sm">
                  <img src="zakladka.jpg">
                  <h4 style="text-align:center; color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="#">Nazwa produktu</h4>
                  <p style="text-align:center;">Kategoria</p>
                  <h5 style="text-align:center; color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="#">79.99zł</h5>
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
        <img src="atuty.jpg" class="img-fluid d-none d-lg-block w-100">
      </div>
      <div>
        <img src="atuty_telefon.jpg" class="img-fluid d-lg-none w-100">
      </div>

      <div>
        <img src="baner.jpg" class="img-fluid w-100">
      </div>

      <div class="b-example-divider"></div>

      <div class="container">
        <footer class="row row-cols-5 py-5 my-5 border-top">
          <div class="col">
      
          </div>
      
          <div class="col" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700";>
            <h4>Konto</h4>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twoje konto</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Zarejestruj się</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Zamówienia</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Koszyk</a></li>
            </ul>
          </div>
      
          <div class="col" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700";>
            <h4>Informacje</h4>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Regulamin sklepu</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Warunki dostawy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Polityka zwrotów</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Polityka prywatności</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kontakt</a></li>
            </ul>
          </div>
      
          <div class="col" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700";>
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
