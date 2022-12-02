<?php
include 'laczenieBaza.php';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand logoheader" href="index.php"><img src="zdjecia/jomix-300.png" width="100" height="50" /></a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="zwijanemenu">
      <nav class="navbar centruj">

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </nav>
    </div>



    <div class="collapse navbar-collapse naglowek" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="Produkty.php">SUKIENKI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Produkty.php">BLUZKI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Produkty.php">BLUZY,KARDIGANY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Produkty.php">SPODNIE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Produkty.php">SPÓDNICE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Produkty.php">KOMPLETY</a>
        </li>

      </ul>

      <ul class="navbar-nav headerikony">

        <li class="nav-item">
          <a class="nav-link" href="Koszyk.php"><img src="zdjecia/cart.png" width="30" height="30"></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="user.php"><img src="zdjecia/account.png"></a>
        </li>

      </ul>

    </div>
  </div>
</nav>