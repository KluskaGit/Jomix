<?php
  include("header.php");
?>

        <div class="bg-light">

          <div class="container">
            <div class="py-5 text-center">
              <img class="d-block mx-auto mb-4">
              <h2>Koszyk</h2>
              <p class="lead">Sfinalizuj swoje zamówienie wpisując poprawne dane.</p>
            </div>
      
            <div class="row">
              <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-muted">Twój koszyk</span>
                  <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Klasyczny komplet w kratę</h6>
                      <small class="text-muted"><img src="zdjecia/produkt.jpg" width="200" height="300"></small>
                    </div>
                    <span class="text-muted">79.99zł</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                      <h6 class="my-0">Kod promocyjny</h6>
                      <small>RABAT</small>
                    </div>
                    <span class="text-success">-10%</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Suma zamówienia</span>
                    <strong>70zł</strong>
                  </li>
                </ul>
      
                <form class="card p-2">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Kod promocyjny">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-secondary">Skorzystaj</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Twoje dane</h4>
                <form class="needs-validation" novalidate>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">Imię</label>
                      <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Pole jest wymagane.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastName">Nazwisko</label>
                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Pole jest wymagane.
                      </div>
                    </div>
                  </div>
      
                  <div class="mb-3">
                    <label for="username">Nazwa użytkownika</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        
                      </div>
                      <input type="text" class="form-control" id="username" placeholder="" required>
                      <div class="invalid-feedback" style="width: 100%;">
                        Pole jest wymagane.
                      </div>
                    </div>
                  </div>
      
                  <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" placeholder="123@gmail.com" required>
                    <div class="invalid-feedback">
                      Wpisz swój adres email.
                    </div>
                  </div>
      
                  <div class="mb-3">
                    <label for="address">Adres</label>
                    <input type="text" class="form-control" id="address" placeholder="" required>
                    <div class="invalid-feedback">
                      Wpisz swój adres dostawy.
                    </div>
                  </div>
      
                  <div class="mb-3">
                    <label for="address2">Adres 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="">
                  </div>
      
                  <div class="row">
                    <div class="col-md-5 mb-3">
                      <label for="country">Państwo</label>
                      <select class="custom-select d-block w-100" id="country" required>
                        <option value="">Wybierz...</option>
                        <option>Polska</option>
                        <option>Anglia</option>
                        <option>Niemcy</option>
                      </select>
                      <div class="invalid-feedback">
                        Podaj poprawny kraj.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="zip">Kod pocztowy</label>
                      <input type="text" class="form-control" id="zip" placeholder="" required>
                      <div class="invalid-feedback">
                        Kod pocztowy jest wymagany.
                      </div>
                    </div>
                  </div>
                  <hr class="mb-4">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Adres wysyłki jest taki sam jak adres rozliczeniowy</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Zapisz swoje dane</label>
                  </div>
                  <hr class="mb-4">
      
                  <h4 class="mb-3">Płatność</h4>
      
                  <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                      <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                      <label class="custom-control-label" for="credit">Karta kredytowa</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                      <label class="custom-control-label" for="debit">Karta debetowa</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                      <label class="custom-control-label" for="paypal">Paypal</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="Blik" name="paymentMethod" type="radio" class="custom-control-input" required>
                      <label class="custom-control-label" for="Blik">Blik</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Imię i nazwisko</label>
                      <input type="text" class="form-control" id="cc-name" placeholder="" required>
                      <small class="text-muted"></small>
                      <div class="invalid-feedback">
                        Pole wymagane.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="cc-number">Numer karty</label>
                      <input type="text" class="form-control" id="cc-number" placeholder="" required>
                      <div class="invalid-feedback">
                        Numer karty jest wymagany.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="cc-expiration">Data wygaśnięcia</label>
                      <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                      <div class="invalid-feedback">
                        Pole wymagane.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="cc-expiration">CVV</label>
                      <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                      <div class="invalid-feedback">
                        Pole jest wymagane.
                      </div>
                    </div>
                  </div>
                  <hr class="mb-4">
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Zapłać</button>
                </form>
              </div>
            </div>
      
           
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
          <script src="../../../../assets/js/vendor/popper.min.js"></script>
          <script src="../../../../dist/js/bootstrap.min.js"></script>
          <script src="../../../../assets/js/vendor/holder.min.js"></script>
          <script>
            (function() {
              'use strict';
      
              window.addEventListener('load', function() {

                var forms = document.getElementsByClassName('needs-validation');

                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
          </script>
        </div>

       
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
