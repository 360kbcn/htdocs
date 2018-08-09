<?php
include("views/partials/header.php");
?>

          <li><a href="<?php echo $data["url"];?>">Home</a></li>
          <li class="active"><?php echo $data["apartat"];?></li>
        </ol>
      </div>
    </div>

    <div class="container marketing">

      <?php

      if(empty($data["categoria"])){

        echo "no hay productos";
      }else{

         $fila = true;

        foreach ($data["categoria"] as $product) {
          
          if($fila){

            echo '
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading"><a href="'.$data["url"].'/articulo/'.$product["id_articulo"].'">'.$product["titulo"].'</a></h2>
                  <p class="lead">'.$product["content"].'</p>
                </div>
                <div class="col-md-5">
                  <img class="featurette-image img-responsive center-block"  src="'.$data["url"].'/img/articulos/'.$product["id_articulo"].'.jpg" alt="imagen del artículo: '.$product["titulo"].'">
                </div>
              </div>

              <hr class="featurette-divider">
            ';
            $fila = false;

          }elseif(!$fila){

             echo '
              <div class="row featurette">
                <div class="col-md-7 col-md-push-5 text-right">
                  <h2 class="featurette-heading"><a href="'.$data["url"].'/articulo/'.$product["id_articulo"].'">'.$product["titulo"].'</a></h2>
                  <p class="lead">'.$product["content"].'</p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                  <img class="featurette-image img-responsive center-block"  src="'.$data["url"].'/img/articulos/'.$product["id_articulo"].'.jpg" alt="imagen del artículo: '.$product["titulo"].'">
                </div>
              </div>

              <hr class="featurette-divider">
            ';
            $fila = true;
          }
          

        }
      }
     
      ?>

<?php
include("views/partials/footer.php");
?>