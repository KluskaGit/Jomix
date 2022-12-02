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

    <?php

    $emailLogowanie = "";
    $hasloLogowanie = "";
    $bladLogowania = false;

    if (isset($_POST['zaloguj'])) {

        $emailLogowanie = $_POST['emailLogowanie'];
        $hasloLogowanie = $_POST["hasloLogowanie"];


        $sprawdzanie_email = mysqli_query($lacz, "SELECT userID, haslo from uzytkownicy where email like '$emailLogowanie' or login like '$emailLogowanie'");
        $sprawdzanie = mysqli_fetch_array($sprawdzanie_email);


        if ($sprawdzanie != null) {
            if (password_verify($hasloLogowanie, $sprawdzanie['haslo'])) {
                session_start();
                $_SESSION['userID'] = $sprawdzanie['userID'];
                header("Location: index.php");
            } else {
                $bladLogowania = true;
            }
        } else {
            $bladLogowania = true;
        }
    }
    ?>
    <div class="container logowanie">

        <div class="logowanielogo">
            <img src="zdjecia/jomix-300.png" alt="">
        </div>
        <h3>Witaj ponownie</h3>
        <br>

        <div class="logowanieform">

            <form method="post">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input name="emailLogowanie" type="eamil" class="form-control" placeholder="" required>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label">Hasło</label>
                    <input name="hasloLogowanie" type="password" class="form-control" placeholder="" required>
                </div>
                <br>
                <?php
                if ($bladLogowania) {
                    echo "<div class='centruj'><a style='color: red;'>Nie poprawne dane</a></div><br>";
                }
                ?>
                <div class="logowaniebutton">

                    <input class="purpleBttn" name="zaloguj" type="submit" value="Zaloguj się">
                </div>
            </form>
            <br>
            <form action="rejestracja.php">
                <input class="purpleBttn" name="zarejestruj" type="submit" value="Zarejestruj się">
            </form>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>