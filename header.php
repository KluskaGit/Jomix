<?php
include 'laczenieBaza.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white naglowekheader">
  <div class="container-fluid">
    <a class="navbar-brand logoheader" href="index.php"><img src="zdjecia/jomix-300.png" width="100" height="50" /></a>

    <div class="wyszukiwarka row">

      <nav class="navbar">
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>

    </div>
  </div>

  <div id="naglowek">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="kolor nav-link" href="Produkty.php">SUKIENKI</a>
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