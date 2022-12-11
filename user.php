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
      //wszystkie produkty
      $wszystkie_produkty = mysqli_query($lacz, 'SELECT cena, szczegoly_produktu.szczegoly_produktuID as sz_ID, szczegoly_produktu.produktID as pID, nazwa_kategorii, nazwa_produktu, nazwa_rozmiaru, ilosc from ((szczegoly_produktu 
      INNER JOIN rozmiary on szczegoly_produktu.rozmiarID=rozmiary.rozmiarID)
      INNER JOIN produkty on szczegoly_produktu.produktID=produkty.produktID) 
      INNER JOIN kategorie on produkty.kategoriaID=kategorie.kategoriaID order by nazwa_kategorii, szczegoly_produktu.produktID');
      //Usuwanie produktow

      $delete_id = "";
      if (isset($_POST['usun_dany_produkt'])) {
        $delete_id = $_POST['zaznacz_produkt'];

        if ($delete_id != null) {

          for ($i = 0; $i < count($delete_id); $i++) {
            mysqli_query($lacz, 'DELETE from szczegoly_produktu where szczegoly_produktuID=' . $delete_id[$i] . '');
          }
          header('Location: user.php');
        } else {
          header('Location: user.php');
        }
      }
      //Edycja produktu


      $edit_id = "";
      $blad_edycja = false;
      if (isset($_POST['edytuj_dany_produkt'])) {
        $edit_id = $_POST['zaznacz_produkt'];

        if ($edit_id != null) {

          if (count($edit_id) == 1) {
            header('Location: edycjaproduktu.php?edit=' . $edit_id[0] . '');
          } else {
            $blad_edycja = true;
          }
        } else {
          header('Location: user.php');
        }
      }

      //Dodawanie kategorii
      $nazwa_kategorii = "";
      if (isset($_POST['dodaj_kategorie'])) {
        $nazwa_kategorii = $_POST['nazwa_kategorii'];

        mysqli_query($lacz, 'INSERT INTO kategorie (nazwa_kategorii) values ("' . $nazwa_kategorii . '")');
        header("Location: user.php");
      }

      //Edycja danych osobowych
      $userID = $_SESSION['userID'];
      $select_user = mysqli_query($lacz, "SELECT * from uzytkownicy where userID=$userID");
      $user_array = mysqli_fetch_array($select_user);
      $admin = $user_array['admin'];
      $wyswietl_admin = "";

      $imie = $user_array['imie'];
      $nazwisko = $user_array['nazwisko'];

      $imie_dane = "";
      $nazwisko_dane = "";
      $eamil_dane = "";
      $blad_email = false;
      if (isset($_POST['save_edit_dane'])) {

        $imie_dane = $_POST['imie'];
        $nazwisko_dane = $_POST['nazwisko'];
        $eamil_dane = $_POST['email'];

        $czy_jest_taki_email = mysqli_query($lacz, "SELECT email from uzytkownicy");

        while ($sprawdzanie_email = mysqli_fetch_array($czy_jest_taki_email)) {

          if ($eamil_dane == $sprawdzanie_email['email']) {
            $blad_email = true;
          }
        }

        if ($blad_email == false) {
          mysqli_query($lacz, 'UPDATE uzytkownicy set imie="' . $imie_dane . '", nazwisko="' . $nazwisko_dane . '", email="' . $eamil_dane . '" where userID=' . $_SESSION['userID'] . '');
          header("Location: user.php");
        }
      }
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
            <a class="list-group-item list-group-item-action" id="list-dane-list" data-bs-toggle="list" href="#list-dane" role="tab" aria-controls="list-dane">Twoje Dane</a>
            <a class="list-group-item list-group-item-action" id="list-adresy-list" data-bs-toggle="list" href="#list-adresy" role="tab" aria-controls="list-adresy">Adresy</a>
            <a class="list-group-item list-group-item-action wylogujButton" id="list-wyloguj-list" data-bs-toggle="list" href="#" role="tab" aria-controls="list-wyloguj">Wyloguj się</a>
          </div>
        </div>
        <div class="col-8 user_prawy">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show" id="list-admin" role="tabpanel" aria-labelledby="list-admin-list">
              <!-- Admin -->
              <form method="post">
                <div class="lista_produktow">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <td class="text-center"></td>
                        <td class="text-center">ID</td>
                        <td class="text-center">Kategoria</td>
                        <td class="text-center">Nazwa</td>
                        <td class="text-center">Rozmiar</td>
                        <td class="text-center">Ilość</td>
                        <td class="text-center">Cena</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($wszystkie_produkty_array = mysqli_fetch_array($wszystkie_produkty)) {
                        echo
                        '<tr class="text-center">' .
                          '<td class="td_item"><input type="checkbox" name="zaznacz_produkt[]" value=' . $wszystkie_produkty_array['sz_ID'] . '></td>' .
                          '<td class="td_item">' . $wszystkie_produkty_array['pID'] . '</td>' .
                          '<td class="td_item">' . $wszystkie_produkty_array['nazwa_kategorii'] . '</td>' .
                          '<td class="td_item">' . $wszystkie_produkty_array['nazwa_produktu'] . '</td>' .
                          '<td class="td_item">' . $wszystkie_produkty_array['nazwa_rozmiaru'] . '</td>' .
                          '<td class="td_item">' . $wszystkie_produkty_array['ilosc'] . '</td>' .
                          '<td class="td_item">' . $wszystkie_produkty_array['cena'] . '</td>' .
                          '</tr>';
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <div class="usun_edytuj">
                  <br>
                  <input type="submit" name="edytuj_dany_produkt" value="Edytuj" class="purpleBttn">
                  <input type="submit" name="usun_dany_produkt" value="Usuń" class="purpleBttn">
                  <?php
                  if ($blad_edycja == true) {
                    echo '<span style="color: red;">Wybierz max 1 produkt do edycji</span>';
                  }
                  ?>
                  <br>
                </div>

              </form>


              <div class="centruj admin_panel">
                <br>
                <form action="dodawanieproduktu.php">
                  <input class="purpleBttn" type="submit" value="Dodaj produkt">
                </form>

                <button type="button" class="purpleBttn" data-bs-toggle="modal" data-bs-target="#admin_kat">
                  Dodaj kategorie
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="admin_kat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Dodaj kategorie</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="post">

                      <div class="modal-body">
                        <div class="modal_element mb-3  w-50">
                          <label for="exampleFormControlInput1" class="form-label modal_tekst">Nazwa kategorii:</label>
                          <input name="nazwa_kategorii" type="text" class="form-control" id="exampleFormControlInput1" required>
                        </div>

                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                        <button name="dodaj_kategorie" type="submit" class="save_changes btn">Dodaj</button>
                      </div>

                    </form>

                  </div>
                </div>
              </div>


            </div>
            <div class="tab-pane fade show active" id="list-kokpit" role="tabpanel" aria-labelledby="list-kokpit-list">
              <div class="kokpit">
                <a>Tutaj, możesz zarządzać swoimi zamówieniami oraz ustawieniami konta.</a>
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

            <div class="tab-pane fade" id="list-dane" role="tabpanel" aria-labelledby="list-dane-list">
              <div class="d-flex">
                <?php
                echo '<h3>Imie: ' . $user_array['imie'] . '</h3>';
                ?>
              </div>

              <div class="d-flex">
                <?php
                echo '<h3>Nazwisko: ' . $user_array['nazwisko'] . '</h3>';
                ?>
              </div>

              <div class="d-flex">
                <?php
                echo '<h3>Email: ' . $user_array['email'] . '</h3>';
                ?>
              </div>

              <br>
              <div class="d-flex">
                <button type="button" class="purpleBttn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Edytuj
                </button>
              </div>



              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Zmień swoje dane</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="post">

                      <div class="modal-body">
                        <div class="modal_element mb-3  w-50">
                          <label for="exampleFormControlInput1" class="form-label modal_tekst">Imie:</label>
                          <input name="imie" type="text" class="form-control" id="exampleFormControlInput1" required>
                        </div>

                        <div class="modal_element mb-3  w-50">
                          <label for="exampleFormControlInput1" class="form-label modal_tekst">Nazwisko:</label>
                          <input name="nazwisko" type="text" class="form-control" id="exampleFormControlInput1" required>
                        </div>

                        <div class="modal_element mb-3  w-50">
                          <label for="exampleFormControlInput1" class="form-label modal_tekst">Email:</label>
                          <input name="email" type="text" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <?php
                        if ($blad_email == true) {
                          echo '<span style="color: red;">Taki email już istnieje</span>';
                        }
                        ?>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                        <button name="save_edit_dane" type="submit" class="save_changes  btn">Zapisz</button>
                      </div>

                    </form>

                  </div>
                </div>
              </div>


            </div>
            <div class="tab-pane fade" id="list-adresy" role="tabpanel" aria-labelledby="list-adresy-list">Adresy</div>
          </div>
        </div>
      </div>


    </div>
    <?php include 'footer.php'; ?>
  </div>

</body>

</html>