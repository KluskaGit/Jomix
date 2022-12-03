<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <?php
    session_start();
    include 'head.php';
    include 'laczenieBaza.php';
    ?>
    <meta charset="UTF-8">
    <title>Dodaj produkt</title>
</head>

<body>

    <?php

    $userIDadd = $_SESSION['userID'];
    $kategoriaID = "";
    $nazwa_produktu = "";
    $opis_produktu = "";
    $cena = "";
    $SKU = "";

    if (isset($_POST['dodajProdukt'])) {
        $kategoriaID = $_POST['kategoriaID'];
        $nazwa_produktu = $_POST['nazwa_produktu'];
        $opis_produktu = $_POST['opis_produktu'];
        $cena = $_POST['cena'];
        $SKU = $_POST['SKU'];

        if (isset($_FILES['file'])) {
            $file_name = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $location = "zdjecia/";
            move_uploaded_file($tmp_name, $location . $file_name);
        }


        mysqli_query($lacz, "INSERT INTO produkty (userID, kategoriaID, nazwa_produktu, opis_produktu, cena, SKU, img_url) 
        VALUES ($userIDadd, $kategoriaID, '$nazwa_produktu', '$opis_produktu', $cena, '$SKU', 'zdjecia/$file_name')");

        header("Location: dodawanieproduktu.php");
    }
    ?>

    <div class="container centruj column">

        <form method="post" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kategoria</label>
                <select name="kategoriaID" class="form-select" aria-label="Default select example">
                    <?php
                    $select_kategoriaAdd = mysqli_query($lacz, "SELECT * FROM kategorie");
                    while ($wybor_kategoriiAdd = @mysqli_fetch_array($select_kategoriaAdd)) {

                        echo '<option value=' . $wybor_kategoriiAdd['kategoriaID'] . '>' . $wybor_kategoriiAdd['nazwa_kategorii'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nazwa produktu</label>
                <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="row">
                <label for="exampleFormControlTextarea1" class="form-label">Opis</label>
                <textarea name="opis_produktu" class="form-control" id="exampleFormControlTextarea1" rows="6" required></textarea>
            </div>

            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cena</label>
                <input name="cena" step="0.01" type="number" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="form-label">SKU</label>
                <input name="SKU" type="number" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="form-label">Zdjecie</label>
                <input type="file" name="file" id="file" accept="image/png, image/gif, image/jpeg, image/webp" required>
            </div>
            <br>
            <br>
            <div class="logowaniebutton^">
                <input type="submit" class="purpleBttn" name="dodajProdukt" value="Dodaj Produkt">
            </div>
        </form>



    </div>
</body>

</html>