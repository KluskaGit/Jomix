<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <?php
    session_start();
    include 'head.php';
    include 'laczenieBaza.php';
    ?>
    <meta charset="UTF-8">
    <title>Edytuj produkt</title>
</head>

<body>
    <?php
    $edit_id = $_GET['edit'];


    $wszystkie_produkty = mysqli_query($lacz, 'SELECT szczegoly_produktu.szczegoly_produktuID as sz_ID, szczegoly_produktu.produktID as pID, nazwa_kategorii, nazwa_produktu, nazwa_rozmiaru, ilosc, produkty.kategoriaID as kategoriaid ,opis_produktu, cena from ((szczegoly_produktu 
      INNER JOIN rozmiary on szczegoly_produktu.rozmiarID=rozmiary.rozmiarID)
      INNER JOIN produkty on szczegoly_produktu.produktID=produkty.produktID) 
      INNER JOIN kategorie on produkty.kategoriaID=kategorie.kategoriaID where szczegoly_produktu.szczegoly_produktuID = ' . $edit_id . '');
    $wszystkie_produkty_array = mysqli_fetch_array($wszystkie_produkty);

    $kategoriaID = "";
    $nazwa_produktu = "";
    $opis_produktu = "";
    $cena = "";
    $ilosc_produktu = "";
    if (isset($_POST['edytowanie'])) {
        $kategoriaID = $_POST['kategoriaID'];
        $nazwa_produktu = $_POST['nazwa_produktu'];
        $opis_produktu = $_POST['opis_produktu'];
        $cena = $_POST['cena'];
        $ilosc_produktu = $_POST['ilosc_produktu'];

        mysqli_query($lacz, 'UPDATE szczegoly_produktu set ilosc=' . $ilosc_produktu . ' where szczegoly_produktuID=' . $edit_id . '');
        mysqli_query($lacz, 'UPDATE produkty set kategoriaID=' . $kategoriaID . ', nazwa_produktu=' . $nazwa_produktu . ', opis_produktu=' . $opis_produktu . ', cena=' . $cena . ' where produktuID=' . $wszystkie_produkty_array['pID'] . '');
    }
    ?>

    <div class="container centruj column">

        <form method="post">

            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kategoria</label>
                <select name="kategoriaID" class="form-select" aria-label="Default select example">
                    <?php
                    $select_kategoriaAdd = mysqli_query($lacz, 'SELECT * FROM kategorie where kategoriaID not like ' . $wszystkie_produkty_array['kategoriaid'] . '');
                    echo '<option selected value=' . $wszystkie_produkty_array['kategoriaid'] . '>' . $wszystkie_produkty_array['nazwa_kategorii'] . '</option>';
                    while ($wybor_kategoriiAdd = @mysqli_fetch_array($select_kategoriaAdd)) {

                        echo '<option value=' . $wybor_kategoriiAdd['kategoriaID'] . '>' . $wybor_kategoriiAdd['nazwa_kategorii'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nazwa produktu</label>
                <input value="<?php echo $wszystkie_produkty_array['nazwa_produktu'] ?>" name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ilość</label>
                <input value="<?php echo $wszystkie_produkty_array['ilosc'] ?>" name="ilosc_produktu" type="number" min="1" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="row">
                <label for="exampleFormControlTextarea1" class="form-label">Opis</label>
                <textarea name="opis_produktu" class="form-control" id="exampleFormControlTextarea1" rows="6" required><?php echo $wszystkie_produkty_array['opis_produktu'] ?></textarea>
            </div>

            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cena</label>
                <input value="<?php echo $wszystkie_produkty_array['cena'] ?>" name="cena" step="0.01" type="number" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="logowaniebutton">
                <input type="submit" class="purpleBttn" name="edytuj" value="Zatwierdź">
            </div>
        </form>

        <form action="user.php">
            <br>
            <input type="submit" class="purpleBttn" value="Wyjdź" name="edytowanie">
        </form>
    </div>
</body>

</html>