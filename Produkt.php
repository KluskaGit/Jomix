<html>

<head>
    <?php
    include 'head.php';
    include 'laczenieBaza.php';

    $produktID = $_GET['produktID'];
    $produkt = mysqli_query($lacz, "SELECT nazwa_produktu, opis_produktu, cena, promocja, sku, img_url from produkty where produktID = $produktID");
    ?>

    <title></title>
</head>

<body>
    <div class="container-fluid p-0">
        <?php include 'header.php'; ?>
        <div class="container-lg">
            <?php while ($row = @mysqli_fetch_array($produkt)) {
                echo '<section class="py-5">
                <div class=" px-4 px-lg-5 my-5">
                    <div class="row gx-4 gx-lg-5 align-items-center">
                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="' . $row['img_url'] . '" /></div>
                        <div class="col-md-6">
                            <div class="small mb-1"></div>
                            <h1 class="display-5 fw-bolder">' . $row['nazwa_produktu'] . '</h1>
                            <div class="fs-5 mb-5">
                                <span class="text-decoration-line-through"></span>
                                <span>' . $row['cena'] . '</span>
                            </div>
                            <p class="lead">' . $row['opis_produktu'] . '</p>
                            <div class="d-flex">
                                <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" />
                                <form action="size">
                                    <select name="Rozmiar">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                </form>
                                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                    <i class="bi-cart-fill me-1"></i>
                                    Dodaj do koszyka
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>';
            }
            ?>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>