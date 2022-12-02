<html>

<head>
  <?php include 'head.php'; ?>
  <title>Produkt</title>
</head>

<body>
  <div class="container-fluid p-0">
    <?php include 'header.php'; ?>

    <div class="container-lg">

      <?php
      $userID = $_SESSION['userID'];
      $select_user = mysqli_query($lacz, "SELECT * from uzytkownicy where userID=$userID");
      $czy_admin = mysqli_fetch_array($select_user);
      $admin = $czy_admin['admin'];
      $wyswietl_admin = "";

      if ($admin == 0) {
        $wyswietl_admin = "none";
      } else {
        $wyswietl_admin = "flex";
      }

      ?>
      <style>
        #list-admin-list {
          display: <?php echo "$wyswietl_admin" ?>;
          border-bottom: none;

        }

        #list-kokpit-list {
          border-top: 1px solid rgba(0, 0, 0, .125);
        }
      </style>

      <h2 class="user_tk">Twoje Konto</h2>


      <div class="row">
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action" id="list-admin-list" data-bs-toggle="list" href="#list-admin" role="tab" aria-controls="list-admin">Admin</a>
            <a class="list-group-item list-group-item-action active" id="list-kokpit-list" data-bs-toggle="list" href="#list-kokpit" role="tab" aria-controls="list-kokpit">Kokpit</a>
            <a class="list-group-item list-group-item-action" id="list-zamowienia-list" data-bs-toggle="list" href="#list-zamowienia" role="tab" aria-controls="list-zamowienia">Zamówienia</a>
            <a class="list-group-item list-group-item-action" id="list-dane-list" data-bs-toggle="list" href="#list-dane" role="tab" aria-controls="list-dane">Twoje Dane</a>
            <a class="list-group-item list-group-item-action" id="list-adresy-list" data-bs-toggle="list" href="#list-adresy" role="tab" aria-controls="list-adresy">Adresy</a>
            <a class="list-group-item list-group-item-action" id="list-wyloguj-list" data-bs-toggle="list" href="#list-wyloguj" role="tab" aria-controls="list-wyloguj">Wyloguj się</a>
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show" id="list-admin" role="tabpanel" aria-labelledby="list-admin-list">


            </div>
            <div class="tab-pane fade show active" id="list-kokpit" role="tabpanel" aria-labelledby="list-kokpit-list">
              <div class="kokpit">
                <a>Tutaj, możesz zarządzać swoimi zamówieniami, zwrotami oraz ustawieniami konta.</a>
                <br>
                <br>
                <h3>Ostatnie Zamówienie</h3>


              </div>
            </div>
            <div class="tab-pane fade" id="list-zamowienia" role="tabpanel" aria-labelledby="list-zamowienia-list">
              Zamówienia</div>
            <div class="tab-pane fade" id="list-dane" role="tabpanel" aria-labelledby="list-dane-list">Dane</div>
            <div class="tab-pane fade" id="list-adresy" role="tabpanel" aria-labelledby="list-adresy-list">Adresy</div>
          </div>
        </div>
      </div>


    </div>
    <?php include 'footer.php'; ?>
  </div>

</body>

</html>