<html>

<head>
  <?php include 'head.php' ?>
  <title>Koszyk</title>
</head>

<body>
  <div class="container-fluid p-0">
    <?php include 'header.php'; ?>
    <div class="container-lg">

      <?php
      $szczegoly_produktID = "";
      if (isset($_POST['usun_z_koszyka'])) {
        $szczegoly_produktID = $_POST['szczegoly_produktID'];
        echo $szczegoly_produktID;
        mysqli_query($lacz, 'DELETE FROM koszyk where szczegoly_produktID=' . $szczegoly_produktID . ' and userID=' . $_SESSION['userID'] . '');
        header("Location: Koszyk.php");
      }
      ?>



      <div class="py-5 text-center">
        <h2>Koszyk</h2>
      </div>

      <div class="produkty_w_koszyku">

        <table class="table">
          <thead class="table-dark">
            <tr>
              <td class="text-center"></td>
              <td class="text-center">img</td>
              <td class="text-center">Nazwa</td>
              <td class="text-center">Rozmiar</td>
              <td class="text-center">Ilość</td>
              <td class="text-center">Razem</td>
              <td class="text-center"></td>
            </tr>
          </thead>
          <tbody>

            <?php
            $nr = 1;
            $select_koszyk = mysqli_query($lacz, 'SELECT * from koszyk where userID=' . $_SESSION['userID'] . '');

            while ($koszyk_array = mysqli_fetch_array($select_koszyk)) {
              $select_produkty_koszyk = mysqli_query($lacz, 'SELECT * from (szczegoly_produktu 
              INNER join produkty on szczegoly_produktu.produktID=produkty.produktID) 
              inner join rozmiary on rozmiary.rozmiarID=szczegoly_produktu.rozmiarID
              where szczegoly_produktu.szczegoly_produktuID=' . $koszyk_array['szczegoly_produktID'] . '');
              $dany_produkt_array = mysqli_fetch_array($select_produkty_koszyk);


              echo '<form method="post"><tr class="text-center">' .
                '<input type="hidden" name="szczegoly_produktID" value=' . $koszyk_array['szczegoly_produktID'] . '>' .
                '<td class="td_item">' . $nr . '</td>' .
                '<td class="td_item"><img class="koszyk_img" src=' . $dany_produkt_array['img_url'] . '></td>' .
                '<td class="td_item">' .  $dany_produkt_array['nazwa_produktu'] . '</td>' .
                '<td class="td_item">' .  $dany_produkt_array['nazwa_rozmiaru'] . '</td>' .
                '<td class="td_item">' .  $koszyk_array['ilosc'] . '</td>' .
                '<td class="td_item">' .  $koszyk_array['cena'] . '</td>' .
                '<td class="td_item"><input type="submit" name="usun_z_koszyka" class="purpleBttn" value="Usuń"></td>' .
                '</tr></form>';
              $nr += 1;
            }
            ?>

          </tbody>
        </table>

      </div>
      <div class="do_platnosci">
        <form action="zamowienie.php">
          <input class="purpleBttn" type="submit" name="przejdz_do_platnosci" value="Przejdź do płatności">
        </form>
      </div>


    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>