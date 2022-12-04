<style>
  ul {
    text-align: center;
  }

  .foocik {
    background-color: gainsboro;
    height: 50px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .row {

    margin: auto;

  }

  .trikolumn {
    display: flex;
    flex-direction: row;
  }

  .media {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .media li {
    margin: 10px;
  }
</style>


<?php
include 'head.php';
?>
<footer>
  <div class="trikolumn row-cols-3 py-3 my-3">
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
      <h4>Kategorie</h4>
      <ul class="nav flex-column">
        <?php
        $wyswietl_kategorie = mysqli_query($lacz, "SELECT kategoriaID, nazwa_kategorii from kategorie");

        while ($jaka_kategoria = @mysqli_fetch_array($wyswietl_kategorie)) {
          echo '
              <li class="nav-item">
                <a class="nav-link p-0 text-muted" href="Produkty.php?katID=' . $jaka_kategoria['kategoriaID'] . '">' . $jaka_kategoria['nazwa_kategorii'] . '</a>
              </li>';
        }
        ?>
      </ul>
    </div>

    <div class="flex-row media">
      <ul class="nav flex-row ">
        <li class="nav-item mb-2"><a href="https://www.instagram.com/jomix_pl/" class="nav-link p-0 text-muted"><img src="zdjecia/instagram.png" width=28px height=28px></a></li>
        <li class="nav-item mb-2"><a href="https://www.facebook.com/Jomixx" class="nav-link p-0 text-muted"><img src="zdjecia/facebook.png" width=28px height=28px></a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="zdjecia/telephone.png" width=28px height=28px></a></li>
      </ul>
    </div>

  </div>

  <div class="foocik">
    ©
    <?php $data = date("Y");
    echo $data ?> Jomix - sklep z odzieżą damską.
  </div>
</footer>