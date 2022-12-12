<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <?php
    include 'head.php';
    include 'laczenieBaza.php';
    ?>
    <title>Jomix</title>
</head>

<body>

    <div class="container-fluid p-0">

        <?php
        $zam_id = "";
        if (isset($_POST['realizuj'])) {
            $zam_id = $_POST['zamowienia_do_rel'];
            if ($zam_id != null) {
                for ($i = 0; $i < count($zam_id); $i++) {
                    mysqli_query($lacz, 'UPDATE zamowienia set status_zamowienia=1 where zamowienieID=' . $zam_id[$i] . '');
                }
            } else {
                header("Location: realizacja_zam.php");
            }
        }
        ?>
        <div class="realizacja_zam">
            <form method="post">
                <?php
                $zamowienia_do_realizacji = mysqli_query($lacz, 'SELECT zamowienieID,data_zamowienia, kwota_zamowienia, zamowienieID, nazwa_dostawcy, cena_dostawy, zamowienia.email as email, nr_tel, kraj, kod_pocztowy, poczta, adres1, adres2, imie, nazwisko  from (zamowienia 
                INNER JOIN dostawcy on zamowienia.dostawaID=dostawcy.dostawcyID)
                INNER JOIN uzytkownicy on zamowienia.userID=uzytkownicy.userID  where status_zamowienia=0');
                $zamowienia_do_realizacji2 = mysqli_query($lacz, 'SELECT * from zamowienia where status_zamowienia=0');
                $zamowienia_do_realizacji_array2 = mysqli_fetch_array($zamowienia_do_realizacji2);
                if ($zamowienia_do_realizacji_array2 != null) {
                    echo '
                   <table class="table">
                          <thead class="table-dark">
                            <tr>
                              <td>ID</td>
                              <td></td>
                              <td>Kwota</td>
                              <td>Kurier</td>
                              <td>Cena dos.</td>
                              <td>Imie</td>
                              <td>Nazwisko</td>
                              <td>Eamil</td>
                              <td>Tel.</td>
                              <td>Kraj</td>
                              <td>Kod</td>
                              <td>Poczta</td>
                              <td>Adres1</td>
                              <td>Adres2</td>

                            </tr>
                          </thead>
                          <tbody>';

                    while ($zamowienia_do_realizacji_array = mysqli_fetch_array($zamowienia_do_realizacji)) {
                        echo '  
                       
                      <tr >' .
                            '<td ><input type="checkbox" name="zamowienia_do_rel[]" value=' . $zamowienia_do_realizacji_array['zamowienieID'] . '></td>' .
                            '<td >' . $zamowienia_do_realizacji_array['data_zamowienia'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['kwota_zamowienia'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['nazwa_dostawcy'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['cena_dostawy'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['imie'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['nazwisko'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['email'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['nr_tel'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['kraj'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['kod_pocztowy'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['poczta'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['adres1'] . '</td>' .
                            '<td >' . $zamowienia_do_realizacji_array['adres2'] . '</td>' .
                            '</tr>';
                        $szczegoly_zamowienia_rel = mysqli_query($lacz, 'SELECT nazwa_dostawcy, cena_dostawy,nazwa_rozmiaru, nazwa_produktu, szczegoly_zamowienia.ilosc as sz_ilosc, szczegoly_zamowienia.cena as sz_cena 
                  from ((((zamowienia INNER JOIN szczegoly_zamowienia on zamowienia.zamowienieID=szczegoly_zamowienia.zamowienieID) 
                  INNER JOIN  szczegoly_produktu on szczegoly_produktu.szczegoly_produktuID=szczegoly_zamowienia.szczegoly_produktuID) 
                  INNER JOIN produkty on szczegoly_produktu.produktID=produkty.produktID)
                  INNER JOIN rozmiary on rozmiary.rozmiarID=szczegoly_produktu.rozmiarID)
                  INNER JOIN dostawcy on zamowienia.dostawaID=dostawcy.dostawcyID
                  where szczegoly_zamowienia.zamowienieID=' . $zamowienia_do_realizacji_array['zamowienieID'] . '');

                        while ($szczegoly_zamowienia_rel_array = mysqli_fetch_array($szczegoly_zamowienia_rel)) {
                            echo '<tr >' .
                                '<td ></td>' .
                                '<td >' . $szczegoly_zamowienia_rel_array['nazwa_produktu'] . '</td>' .
                                '<td >' . $szczegoly_zamowienia_rel_array['nazwa_rozmiaru'] . '</td>' .
                                '<td >' . $szczegoly_zamowienia_rel_array['sz_ilosc'] . '</td>' .
                                '<td >' . $szczegoly_zamowienia_rel_array['sz_cena'] . '</td>' .
                                '<td ></td>' .
                                '<td ></td>' .
                                '<td ></td>' .
                                '<td ></td>' .
                                '<td ></td>' .
                                '<td ></td>' .
                                '<td ></td>' .
                                '<td ></td>' .
                                '<td ></td>' .
                                '</tr>';
                        }

                        echo '<tr>
                    <td>---</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>';
                    }
                    echo '
                     </tbody>
                  </table>';
                } else {
                    echo '<h3>Brak zamowień do realizacji</h3>';
                }


                ?>
                <input class="purpleBttn" type="submit" name="realizuj" value="Zrealizuj">
            </form>
            <br>
            <form action="user.php">
                <input class="purpleBttn" type="submit" name="wyjdz" value="Wyjdź">
            </form>

        </div>
    </div>
</body>

</html>