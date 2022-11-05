<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
 <title>Komplety</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><img src="jomix-300.png" width="100" height="50"/></a>
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
                <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="../Produkty/Produkty.php">SUKIENKI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="../Produkty/Produkty.php">BLUZKI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="../Produkty/Produkty.php">BLUZY,KARDIGANY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="../Produkty/Produkty.php">SPODNIE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="../Produkty/Produkty.php">SPÓDNICE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="../Produkty/Produkty.php">KOMPLETY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #430b4e; font-family: 'Roboto', Lato, 'Roboto Condensed', sans-serif; font-weight: 700;" href="../Koszyk/Koszyk.php"><img src="cart.png" width="30" height="30"></a>
              </li>
              </li>
            </ul>
            </div>
          </div>
        </div>
        </nav>

        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="produkt.jpg"/></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: 546-498</div>
                        <h1 class="display-5 fw-bolder">Klasyczny komplet w kratę
                        </h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">119.99zł</span>
                            <span>99.99zł</span>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <form action="size" style="margin: 10px; font-size: 16px;">
                              <select name="Rozmiar">
                                <option>S-36</option>
                                <option>M-38</option>
                                <option>L-40</option>
                                <option>XL-42</option>
                              </select>
                            </form>
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Dodaj do koszyka
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Podobne produkty</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="produkt.jpg"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Klasyczny komplet w kratę</h5>
                                    119.99zł
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Szczegóły</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="produkt.jpg"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Klasyczny komplet w kratę</h5>
                                    119.99zł
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Szczegóły</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="produkt.jpg"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Klasyczny komplet w kratę</h5>
                                    119.99zł
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Szczegóły</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="produkt.jpg"/>
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Klasyczny komplet w kratę</h5>
                                    119.99zł
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Szczegóły</a></div>
                            </div>
                        </div>
                    </div>
                    

                        
                   
                </div>
            </div>
        </section>

       
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
