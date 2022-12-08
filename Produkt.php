<html>

<head>
    <?php
    include 'head.php';
    include 'laczenieBaza.php';


    $produktID = $_GET['produktID'];
    $produkt = mysqli_query($lacz, "SELECT nazwa_produktu, opis_produktu, cena, promocja, sku, img_url from produkty where produktID = $produktID");
    $rozmiaryilosc = mysqli_query($lacz, "SELECT * from szczegoly_produktu szp inner join rozmiary roz ON szp.rozmiarID=roz.rozmiarID where produktID = $produktID");
    ?>

    <title>Produkt</title>
</head>

<body>

    <div class="container-fluid p-0">
        <?php include 'header.php'; ?>
        <div class="container-lg">
            <?php
            $szczegoly_produktu_id = "";
            $rozmiarID = "";
            $ilosc = "";
            $cena = "";


            if (isset($_POST['dodajdokoszyka'])) {
                $rozmiarID = $_POST['rozmiaryproduktu'];
                $ilosc = $_POST['ilosc'];
                $produkt_array = mysqli_fetch_array($produkt);
                if ($produkt_array['promocja'] > 0) {
                    $cena = $produkt_array['promocja'];
                } else {
                    $cena = $produkt_array['cena'];
                }

                $select_szczegoly = mysqli_query($lacz, "SELECT * from szczegoly_produktu where produktID=$produktID and rozmiarID=$rozmiarID");
                $szczegoly_array = mysqli_fetch_array($select_szczegoly);

                $select_koszyk_stack = mysqli_query($lacz, 'SELECT * from koszyk where userID=' . $_SESSION['userID'] . ' and szczegoly_produktID=' . $szczegoly_array['szczegoly_produktuID'] . ' ');
                $koszyk_array_stack = mysqli_fetch_array($select_koszyk_stack);

                if (isset($_SESSION['userID'])) {

                    if ($koszyk_array_stack != null) {
                        mysqli_query($lacz, 'UPDATE koszyk set ilosc=' . intval($koszyk_array_stack['ilosc'] + $ilosc) . ' where koszykID=' . $koszyk_array_stack['koszykID'] . '');
                        header("Location: Produkt.php?produktID=$produktID");
                    } else {
                        mysqli_query($lacz, 'INSERT INTO koszyk (userID, szczegoly_produktID, ilosc, cena) values (' . $_SESSION['userID'] . ', ' . $szczegoly_array['szczegoly_produktuID'] . ', ' . $ilosc . ', ' . $cena * $ilosc . ')');
                        header("Location: Produkt.php?produktID=$produktID");
                    }
                } else {
                    header("Location: logowanie.php");
                }
            }
            ?>

            <?php $row = mysqli_fetch_array($produkt) ?>
            <section class="py-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 "><img class="zdjecieproduktu card-img-top mb-5 mb-md-0" src="<?php echo $row['img_url'] ?>" /></div>
                    <div class="col-md-6">

                        <h1 class="display-5 fw-bolder"><?php echo $row['nazwa_produktu'] ?> </h1>
                        <br>
                        <p class="lead"><?php echo $row['opis_produktu'] ?></p>


                        <form method="post">
                            <div class="DoKoszyka ">
                                <div class="produktwartosc">
                                    Cena: <?php
                                            if ($row['promocja'] > 0) {
                                                echo $row['promocja'];
                                            } else {
                                                echo $row['cena'];
                                            }
                                            ?>
                                </div>

                                <div class="produktwartosc">
                                    ilosc: <input style="text-align: right" type="number" name="ilosc" min="1" value="1">
                                </div>

                                <div>
                                    <select name="rozmiaryproduktu">
                                        <?php
                                        while ($jakirozmiar = mysqli_fetch_array($rozmiaryilosc)) {

                                            if ($jakirozmiar['ilosc'] > 0) {
                                                echo '<option value=' . $jakirozmiar['rozmiarID'] . '>' . $jakirozmiar['nazwa_rozmiaru'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <input name="dodajdokoszyka" type="submit" value="Dodaj do koszyka" class="btn btn-outline-dark flex-shrink-0">
                            </div>


                        </form>


                    </div>
                </div>

            </section>


        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>