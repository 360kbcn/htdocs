<?php
include("views/partials/header.php");
?>

          <li><a href="<?php echo $data["url"];?>">Home</a></li>
          <li><a href="<?php echo $data["url"];?>/categoria/<?php echo $data["articulo"]["categoria"] ?>"><?php echo $data["articulo"]["nombre"];?></a></li>
          <li class="active"><?php echo $data["articulo"]["titulo"];?></li>
        </ol>
      </div>
    </div>

    <div class="container marketing">

      <?php


      if(empty($data["articulo"])){

        echo "no hay productos";
      }else{

            echo '
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">'.$data["articulo"]["titulo"].'</h2>
                  <p class="lead">'.$data["articulo"]["content"].'</p>
                  <p class="lead">'.$data["articulo"]["price"].' €</p>
                </div>
                <div class="col-md-5">
                  <img class="featurette-image img-responsive center-block" src="'.$data["url"].'/img/articulos/'.$data["articulo"]["id_articulo"].'.jpg" alt="imagen del artículo: '.$data["articulo"]["titulo"].'">
                </div>
              </div>

              <hr class="featurette-divider">
            ';    

      }
     
      ?>


      <!-- /END THE FEATURETTES -->


<?php
include("views/partials/footer.php");
?>