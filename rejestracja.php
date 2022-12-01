<?php

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
?>




<div class="rejestracja">

    <form method="post">
        <div class="centruj">

            <div class="dodawanie">
                <div class="nazwy">
                    <p>Imie autora</p>
                    <p>Nazwisko autora</p>
                    <p>Tytuł</p>
                    <p>Cena</p>
                </div>
                <div class="pola">
                    <input pattern="[A-Za-z]+" class="poleText" type="text" name="IMIE" required>
                    <input pattern="[A-Za-z]+" class="poleText" type="text" name="NAZWISKO" required>
                    <input pattern="[A-Za-z].{1,}" class="poleText" type="text" name="TYTUL" required>
                    <input step="0.01" class="poleText" type="number" name="CENA" required>
                </div>
            </div>
        </div>
        <input type="submit" class="addButton" name="addButton" value="Dodaj">
    </form>
</div>