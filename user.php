<?php
    include("header.php");
?>
<style>
    .tk
    {
        margin-top:40px;
        text-align: center;
        margin-bottom:60px;
    }
</style>

<div class="container">
    <h2 class="tk">Twoje Konto</h2>

    <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-kokpit-list" data-bs-toggle="list" href="#list-kokpit" role="tab" aria-controls="list-kokpit">Kokpit</a>
      <a class="list-group-item list-group-item-action" id="list-zamowienia-list" data-bs-toggle="list" href="#list-zamowienia" role="tab" aria-controls="list-zamowienia">Zamówienia</a>
      <a class="list-group-item list-group-item-action" id="list-dane-list" data-bs-toggle="list" href="#list-dane" role="tab" aria-controls="list-dane">Twoje Dane</a>
      <a class="list-group-item list-group-item-action" id="list-adresy-list" data-bs-toggle="list" href="#list-adresy" role="tab" aria-controls="list-adresy">Adresy</a>
      <a class="list-group-item list-group-item-action" id="list-wyloguj-list" data-bs-toggle="list" href="#list-wyloguj" role="tab" aria-controls="list-wyloguj">Wyloguj się</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-kokpit" role="tabpanel" aria-labelledby="list-kokpit-list">
            <div class="kokpit">
                <a>Tutaj, możesz zarządzać swoimi zamówieniami, zwrotami oraz ustawieniami konta.</a>
                <br>
                <br>
                <h3>Ostatnie Zamówinie</h3>
                
            </div>
        </div>
        <div class="tab-pane fade" id="list-zamowienia" role="tabpanel" aria-labelledby="list-zamowienia-list">...</div>
        <div class="tab-pane fade" id="list-dane" role="tabpanel" aria-labelledby="list-dane-list">...</div>
        <div class="tab-pane fade" id="list-adresy" role="tabpanel" aria-labelledby="list-adresy-list">...</div>
        <div class="tab-pane fade" id="list-wyloguj" role="tabpanel" aria-labelledby="list-wyloguj-list">...</div>
    </div>
  </div>
</div>
</div>



<?php
    include("footer.php");
?>

