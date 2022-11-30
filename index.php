<?php
  include("header.php");
?>

      
        <div class="main">

          <?php
          
            if(isset($_FILES['file']))
            {
              $file_name=$_FILES['file']['name'];
              $tmp_name=$_FILES['file']['tmp_name'];
              $location="zdjecia/";
              move_uploaded_file($tmp_name,$location.$file_name);
            }
            
            
          ?>
          <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file" accept="image/png, image/gif, image/jpeg, image/webp">
            <input type="submit" name="send" value="upload">
          </form>

          <h1>NOWOŚCI</h1>

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 col ">

            <div class="col">
              <a href="#">
                <div class="card shadow-sm">
                  <img src="zdjecia/zakladka.jpg">
                  <h4 href="#">Nazwa produktu</h4>
                  <p>Kategoria</p>
                  <h5 href="#">79.99zł</h5>
                </div>
              </a>
            </div>

          </div>
          <br>
        
      
          <div class="absolute">
            <img src="zdjecia/atuty.jpg" class="img-fluid d-none d-lg-block w-100">
          </div>
         
          <div>
            <img src="zdjecia/baner.jpg" class="img-fluid w-100">
          </div>

      
        </div>
      
        <?php
          include("footer.php");
        ?>
      
