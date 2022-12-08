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
            <form method="post">
                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Imie</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nazwisko</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>


                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nr. Tel.</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kraj</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kod pocztowy</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>


                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Poczta</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adres 1</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1" required>
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adres 2 (Opcjonalne)</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Dostawa</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="row mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Płatność</label>
                    <input name="nazwa_produktu" type="text" class="form-control" id="exampleFormControlInput1">
                </div>


            </form>
        </div>
    </div>

</body>

</html>