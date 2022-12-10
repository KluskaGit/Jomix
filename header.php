<?php
include 'laczenieBaza.php';
session_start();


?>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand logoheader" href="index.php"><img src="zdjecia/jomix-300.png" width="100" height="50" /></a>





    <div class="wyszukaj">
      <nav class="navbar centruj">

        <form action="produkty_all.php" class="d-flex" method="post" name="szukanie">
          <input class="form-control me-2" type="text" name="szukanie">
          <button class="btn btn-outline-success" type="submit" name="szukajbutton">Szukaj</button>
        </form>
      </nav>
    </div>



    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse naglowek" id="navbarNavDropdown">

      <ul class="navbar-nav col-auto">
        <li class="nav-item">
          <a class="nav-link" href="produkty_all.php">Wszystko</a>
        </li>

        <?php
        $wyswietl_kategorie = mysqli_query($lacz, 'SELECT kategoriaID, nazwa_kategorii from kategorie');

        while ($jaka_kategoria = @mysqli_fetch_array($wyswietl_kategorie)) {
          echo '
              <li class="nav-item">
                <a class="nav-link" href="Produkty.php?katID=' . $jaka_kategoria['kategoriaID'] . '">' . $jaka_kategoria['nazwa_kategorii'] . '</a>
              </li>       
          ';
        }
        ?>
      </ul>

      <div class="cart_user">
        <ul class="navbar-nav headerikony col-auto">

          <li class="nav-item">
            <a class="nav-link" href="
          <?php
          if (isset($_SESSION['userID'])) {
            echo 'Koszyk.php';
          } else {
            echo 'logowanie.php';
          }
          ?>
          "><img src="zdjecia/cart.png" width="30" height="30"></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="
          <?php
          if (isset($_SESSION['userID'])) {
            echo 'user.php';
          } else {
            echo 'logowanie.php';
          }
          ?>
          "><img src="zdjecia/account.png"></a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</nav>