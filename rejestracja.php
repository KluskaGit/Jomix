<?php
include 'head.php';
/*
$IMIE = "";
$NAZWISKO = "";
$TYTUL = "";
$CENA = "";

$host = 'localhost';
$dbname = 'ksiegarnia1';
$user = 'user2';
$pass = 'ZAQ!2wsx';
include("laczenie.php");

if (isset($_POST['addButton'])) {
    $IMIE = $_POST["IMIE"];
    $NAZWISKO = $_POST["NAZWISKO"];
    $TYTUL = $_POST["TYTUL"];
    $CENA = $_POST["CENA"];

    $sql = "INSERT INTO ksiazki (imieautora,nazwiskoautora,TYTUL,CENA) 
            VALUES ('$IMIE','$NAZWISKO','$TYTUL','$CENA')";
    $stmt = $pdo->exec($sql);
}
*/
?>




<div class="container-lg centruj rejestracjamain">
    <div class="logowanielogo rejlogo">
        <img src="zdjecia/jomix-300.png" alt="">
    </div>

    <form method="post">
        <div class="col-auto">
            <label for="inputImie" class="col-form-label">IMIE</label>
            <input type="text" id="inputImie" class="form-control">

            <label for="inputNazwisko" class="col-form-label">NAZWISKO</label>
            <input type="text" id="inputNazwisko" class="form-control">

            <label for="inputEmail" class="col-form-label">EMAIL</label>
            <input type="text" id="inputEmail" class="form-control">

            <label for="inputHaslo" class="col-form-label">HASŁO</label>
            <input type="text" id="inputHaslo" class="form-control">
        </div>
        <div class="logowaniebutton">
            <br>
            <input class="purpleBttn" type="submit" name="zarejestrujsie" value="Zarejestruj się">
        </div>

    </form>
</div>