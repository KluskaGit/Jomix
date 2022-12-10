<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <?php
    session_start();
    include 'head.php';
    include 'laczenieBaza.php';
    ?>
    <meta charset="UTF-8">
    <title>Zamówienie</title>
</head>

<body>
    <div class="container-fluid p-0">

        <div class="container-lg centruj">
            <?php
            $select_dostawcy = mysqli_query($lacz, 'SELECT * from dostawcy');
            $select_platnosc = mysqli_query($lacz, 'SELECT * from platnosc');
            $select_user = mysqli_query($lacz, 'SELECT * from uzytkownicy WHERE userID=' . $_SESSION['userID'] . '');
            $select_koszyk = mysqli_query($lacz, 'SELECT * from koszyk WHERE userID=' . $_SESSION['userID'] . '');
            $suma_zamowienia = mysqli_query($lacz, 'SELECT ROUND(sum(cena),2) as suma FROM koszyk WHERE userID=' . $_SESSION['userID'] . '');


            $suma_array = mysqli_fetch_array($suma_zamowienia);
            $user_array = mysqli_fetch_array($select_user);

            $imie = "";
            $nazwisko = "";
            $telefon = "";
            $kraj = "";
            $kod_pocztowy = "";
            $poczta = "";
            $adres1 = "";
            $adres2 = "";
            $dostawa = "";
            $platnosc = "";

            if (isset($_POST['zaplac_button'])) {
                $imie = $_POST['Imie'];
                $nazwisko = $_POST['Nazwisko'];
                $telefon = $_POST['telefon'];
                $kraj = $_POST['kraj'];
                $kod_pocztowy = $_POST['Kod_pocztowy'];
                $poczta = $_POST['Poczta'];
                $adres1 = $_POST['Adres_1'];
                if (isset($_POST['Adres_2'])) {
                    $adres2 = $_POST['Adres_2'];
                } else {
                    $adres2 = "a";
                }
                $dostawa = $_POST['dostawa'];
                $platnosc = $_POST['platnosc'];
                $today = date("Y-m-d");

                mysqli_begin_transaction($lacz);

                mysqli_query($lacz, 'INSERT INTO zamowienia (userID, kwota_zamowienia, platnoscID, dostawaID, data_zamowienia, email, nr_tel, kraj, kod_pocztowy, poczta, adres1, adres2) 
                values (' . $_SESSION['userID'] . ', ' . $suma_array['suma'] . ', ' . $platnosc . ', ' . $dostawa . ',"' . $today . '", "' . $user_array['email'] . '", 
                "' . $telefon . '", "' . $kraj . '", "' . $kod_pocztowy . '", "' . $poczta . '", "' . $adres1 . '", "' . $adres2 . '")');

                $select_zamowienie = mysqli_query($lacz, 'SELECT * from zamowienia WHERE userID=' . $_SESSION['userID'] . ' order by zamowienieID DESC limit 1');
                $zamowienia_array = mysqli_fetch_array($select_zamowienie);


                while ($koszyk_array = mysqli_fetch_array($select_koszyk)) {
                    mysqli_query($lacz, 'INSERT INTO szczegoly_zamowienia (zamowienieID, szczegoly_produktuID, ilosc, cena)
                    values (' . $zamowienia_array['zamowienieID'] . ', ' . $koszyk_array['szczegoly_produktID'] . ', ' . $koszyk_array['ilosc'] . ', ' . $koszyk_array['cena'] . ')
                    ');
                }

                mysqli_query($lacz, 'DELETE FROM koszyk where userID=' . $_SESSION['userID'] . '');

                mysqli_commit($lacz);
                header("Location: index.php");
            }
            ?>
            <form method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Imie</label>
                        <input name="Imie" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Nazwisko</label>
                        <input name="Nazwisko" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                </div>



                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nr. Tel.</label>
                    <input name="telefon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="123-456-789" type="tel" class="form-control" id="exampleFormControlInput1" required>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kraj</label>
                    <select class="form-select" name="kraj" id="exampleFormControlInput1" required>
                        <option selected value="Polska">Polska</option>
                        <option value="Niemcy">Niemcy</option>
                        <option value="Ukraina">Ukraina</option>
                    </select>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kod pocztowy</label>
                        <input name="Kod_pocztowy" pattern="^\d{2}-\d{3}$" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Poczta</label>
                        <input name="Poczta" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>

                </div>



                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adres 1</label>
                    <input name="Adres_1" type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adres 2 (Opcjonalne)</label>
                    <input name="Adres_2" type="text" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Dostawa</label>


                        <?php
                        while ($dostawcy_array = mysqli_fetch_array($select_dostawcy)) {
                            echo '
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="dostawa" id="flexRadioDefault1" value=' . $dostawcy_array['dostawcyID'] . ' required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        ' . $dostawcy_array['nazwa_dostawcy'] . ' ' . $dostawcy_array['cena_dostawy'] . 'zł
                                    </label>
                                </div>
                                ';
                        }
                        ?>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Płatność</label>
                        <?php
                        while ($platnosc_array = mysqli_fetch_array($select_platnosc)) {
                            echo '
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="platnosc" id="flexRadioDefault1" value=' . $platnosc_array['platnoscID'] . ' required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        ' . $platnosc_array['metoda_platnosci'] . '
                                    </label>
                                </div>
                                ';
                        }
                        ?>
                    </div>
                </div>



                <div class="text-center">
                    <input class="purpleBttn" type="submit" name="zaplac_button" value="Zapłać">
                </div>
            </form>
        </div>
    </div>

</body>

</html>