<style>
  ul
  {
    text-align:center;
  }
  .foocik
  {
    background-color:gainsboro;
    height:50px;
    width:100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .row
  {
    
    margin: auto;   
  
  }
  .trikolumn
  {
    display: flex;
    flex-direction: row;
  }

  .media
  {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .media li
  {
    margin:10px;
  }

</style>
</div>
      <footer>
        <div class="trikolumn row-cols-3 py-3 my-3">
          <div class="col">
            <h4>Konto</h4>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twoje konto</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Zarejestruj się</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Zamówienia</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Koszyk</a></li>
            </ul>
          </div>
      
          <div class="col">
            <h4>Kategorie</h4>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bluzki</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bluzy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Komplety</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Spódnice</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Spodnie</a></li>
            </ul>
          </div>

          <div class="row">
            <ul class="nav flex-row media">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="zdjecia/instagram.png" width=28px height=28px></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="zdjecia/facebook.png" width=28px height=28px></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><img src="zdjecia/telephone.png" width=28px height=28px></a></li>
            </ul>
          </div>

        </div>

          <div class="foocik">
              © <?php $data=date("Y"); echo $data?> Jomix - sklep z odzieżą damską.
          </div>
      </footer>

        <script src="jquery-3.6.0.js"></script>
        <script src="jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>