<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <title>Jomix</title>
</head>
<body>
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
                    <input type="text" class="form-control" placeholder="" required>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label">Hasło</label>
                    <input type="text" class="form-control" placeholder=""required>
                </div>
                <br>
                <div class="logowaniebutton">
                    <input class="logbttn" type="submit" value="Zaloguj się">
                </div>
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>