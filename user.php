<html>

<head>
  <?php include 'head.php'; ?>
  <title>Konto</title>
</head>

<body>
  <div class="container-fluid p-0">
    <?php include 'header.php'; ?>

    <div class="container-lg">

      <?php
      $userID = $_SESSION['userID'];
      $select_user = mysqli_query($lacz, "SELECT * from uzytkownicy where userID=$userID");
      $user_array = mysqli_fetch_array($select_user);
      $admin = $user_array['admin'];
      $wyswietl_admin = "";

      $imie = $user_array['imie'];
      $nazwisko = $user_array['nazwisko'];
      ?>


      <h2 class="user_tk"><?php echo $imie . ' ' . $nazwisko; ?></h2>



      <div class="row">
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <?php
            if ($admin == 1) {
              echo '<a class="list-group-item list-group-item-action" id="list-admin-list" data-bs-toggle="list" href="#list-admin" role="tab" aria-controls="list-admin">Admin</a>';
            }
            ?>
            <a class="list-group-item list-group-item-action active" id="list-kokpit-list" data-bs-toggle="list" href="#list-kokpit" role="tab" aria-controls="list-kokpit">Kokpit</a>
            <a class="list-group-item list-group-item-action" id="list-zamowienia-list" data-bs-toggle="list" href="#list-zamowienia" role="tab" aria-controls="list-zamowienia">Zamówienia</a>
            <a class="list-group-item list-group-item-action" id="list-dane-list" data-bs-toggle="list" href="#list-dane" role="tab" aria-controls="list-dane">Twoje Dane</a>
            <a class="list-group-item list-group-item-action" id="list-adresy-list" data-bs-toggle="list" href="#list-adresy" role="tab" aria-controls="list-adresy">Adresy</a>
            <a class="list-group-item list-group-item-action wylogujButton" id="list-wyloguj-list" data-bs-toggle="list" href="#" role="tab" aria-controls="list-wyloguj">Wyloguj się</a>
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show" id="list-admin" role="tabpanel" aria-labelledby="list-admin-list">

              <div class="centruj">
                <form action="dodawanieproduktu.php">
                  <input class="purpleBttn" type="submit" value="Dodaj produkt">
                </form>
              </div>

            </div>
            <div class="tab-pane fade show active" id="list-kokpit" role="tabpanel" aria-labelledby="list-kokpit-list">
              <div class="kokpit">
                <a>Tutaj, możesz zarządzać swoimi zamówieniami, zwrotami oraz ustawieniami konta.</a>
                <br>
                <br>
                <h3>Ostatnie Zamówienie</h3>


                <?php
                $select_zamowienia = mysqli_query($lacz, 'SELECT * from zamowienia where userID= ' . $_SESSION['userID'] . ' order by zamowienieID DESC LIMIT 1');
                $array_zamowienia_l1 = mysqli_fetch_array($select_zamowienia);
                ?>

                <?php
                if ($array_zamowienia_l1 != null) {
                  $select_zamowienia_i_szczegoly = mysqli_query($lacz, 'SELECT nazwa_rozmiaru, nazwa_produktu, img_url, zamowienia.userID as z_userID, szczegoly_zamowienia.zamowienieID as sz_zamowienieID, zamowienia.zamowienieID as z_zamowienieID, szczegoly_zamowienia.ilosc as sz_ilosc, szczegoly_zamowienia.cena as sz_cena 
                  from (((zamowienia INNER JOIN szczegoly_zamowienia on zamowienia.zamowienieID=szczegoly_zamowienia.zamowienieID) 
                  INNER JOIN  szczegoly_produktu on szczegoly_produktu.szczegoly_produktuID=szczegoly_zamowienia.szczegoly_produktuID) 
                  INNER JOIN produkty on szczegoly_produktu.produktID=produkty.produktID)
                  INNER JOIN rozmiary on rozmiary.rozmiarID=szczegoly_produktu.rozmiarID
                  where zamowienia.userID=' . $_SESSION['userID'] . ' and szczegoly_zamowienia.zamowienieID=' . $array_zamowienia_l1['zamowienieID'] . '');
                  echo '
                   <table class="table">
                          <thead class="table-dark">
                            <tr>
                              <td class="text-center">img</td>
                              <td class="text-center">Nazwa</td>
                              <td class="text-center">Rozmiar</td>
                              <td class="text-center">Ilość</td>
                              <td class="text-center">Cena</td>
                            </tr>
                          </thead>
                          <tbody>';

                  while ($array_zam_i_sz = mysqli_fetch_array($select_zamowienia_i_szczegoly)) {
                    echo '  
                       
                            <tr class="text-center">' .
                      '<td class="td_item"><img class="koszyk_img" src=' . $array_zam_i_sz['img_url'] . '></td>' .
                      '<td class="td_item">' . $array_zam_i_sz['nazwa_produktu'] . '</td>' .
                      '<td class="td_item">' . $array_zam_i_sz['nazwa_rozmiaru'] . '</td>' .
                      '<td class="td_item">' . $array_zam_i_sz['sz_ilosc'] . '</td>' .
                      '<td class="td_item">' . $array_zam_i_sz['sz_cena'] . '</td>' .
                      '</tr>';
                  }
                  echo '
                     </tbody>
                  </table>';
                } else {
                  echo '<h3>Nie złożyłeś jeszcze żadnego zamówienia</h3>';
                }

                ?>



              </div>
            </div>
            <div class="tab-pane fade" id="list-zamowienia" role="tabpanel" aria-labelledby="list-zamowienia-list">
              Zamówienia</div>
            <div class="tab-pane fade" id="list-dane" role="tabpanel" aria-labelledby="list-dane-list">Dane</div>
            <div class="tab-pane fade" id="list-adresy" role="tabpanel" aria-labelledby="list-adresy-list">Adresy</div>
          </div>
        </div>
      </div>


    </div>
    <?php include 'footer.php'; ?>
  </div>

</body>

</html>