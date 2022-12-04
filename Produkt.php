<html>

<head>
    <?php
    include 'head.php';
    include 'laczenieBaza.php';

    $produktID = $_GET['produktID'];
    $produkt = mysqli_query($lacz, "SELECT nazwa_produktu, opis_produktu, cena, promocja, sku, img_url from produkty where produktID = $produktID");
    $rozmiaryilosc = mysqli_query($lacz, "SELECT * from szczegoly_produktu szp inner join rozmiary roz ON szp.rozmiarID=roz.rozmiarID where produktID = $produktID");
    ?>

    <title></title>
</head>

<body>
    <div class="container-fluid p-0">
        <?php include 'header.php'; ?>
        <div class="container-lg">
            <?php $row = mysqli_fetch_array($produkt) ?>
            <section class="py-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 "><img class="zdjecieproduktu card-img-top mb-5 mb-md-0" src="<?php echo $row['img_url'] ?>" /></div>
                    <div class="col-md-6">

                        <h1 class="display-5 fw-bolder"><?php echo $row['nazwa_produktu'] ?> </h1>
                        <br>
                        <p class="lead"><?php echo $row['opis_produktu'] ?></p>


                        <form method="post">
                            <div class="DoKoszyka">
                                <div>
                                    Cena: <?php echo $row['cena'] ?>
                                </div>

                                <div>
                                    ilosc:
                                </div>

                                <div>
                                    <select name="rozmiaryproduktu">
                                        <?php
                                        while ($jakirozmiar = mysqli_fetch_array($rozmiaryilosc)) {
                                            echo '<optio value=' . $jakirozmiar['rozmiarID'] . '>';
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