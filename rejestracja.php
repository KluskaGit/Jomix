<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <?php include 'head.php';
    ?>
    <title>Zarejestruj się</title>
</head>

<body>

    <?php

    include 'laczenieBaza.php';

    $imie = "";
    $nazwisko = "";
    $login = "";
    $haslo = "";
    $email = "";
    $blad_email = false;


    if (isset($_POST['zarejestrujsie'])) {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $email = $_POST["email"];
        $haslo = password_hash($_POST["haslo"], PASSWORD_ARGON2I);

        $czy_jest_taki_email = mysqli_query($lacz, "SELECT email from uzytkownicy");

        while ($sprawdzanie_email = mysqli_fetch_array($czy_jest_taki_email)) {

            if ($email == $sprawdzanie_email['email']) {
                $blad_email = true;
            }
        }

        if ($blad_email == false) {
            mysqli_query($lacz, "INSERT INTO uzytkownicy (imie,nazwisko,login,haslo,email) 
            VALUES ('$imie','$nazwisko','$email','$haslo','$email')");

            header("Location: logowanie.php");
        }
    }

    ?>




    <div class="container-lg centruj rejestracjamain">
        <div class="logowanielogo rejlogo">
            <img src="zdjecia/jomix-300.png" alt="">
        </div>

        <form method="post">
            <div class="col">
                <label for="inputImie" class="col-form-label">IMIE</label>
                <input pattern="[A-Za-z]+" type="text" name="imie" id="inputImie" class="form-control" required>

                <label for="inputNazwisko" class="col-form-label">NAZWISKO</label>
                <input pattern="[A-Za-z]+" type="text" name="nazwisko" id="inputNazwisko" class="form-control" required>

                <label for="inputEmail" class="col-form-label">EMAIL</label>
                <input type="email" name="email" id="inputEmail" class="form-control" required>

                <label for="inputHaslo" class="col-form-label">HASŁO</label>
                <input type="password" name="haslo" id="inputHaslo" class="form-control" required>
            </div>
            <?php
            if ($blad_email) {
                echo "<div class='centruj '><a style='color: red; '>Konto o tym adresie email już istnieje</a></div>";
            }
            ?>
            <div class="logowaniebutton">
                <br>
                <input class="purpleBttn" type="submit" name="zarejestrujsie" value="Zarejestruj się">
            </div>

        </form>
    </div>

</body>

</html>