<?php
include("views/partials/header.php");
?>

  
          <li class="active">Home</li>
        </ol>
      </div>
    </div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
      <?php

      $num_categorias = count($data["categories"]);
      $col = round(12/$num_categorias);

      foreach($data["categories"] as $categoria){

        echo '
              <div class="col-lg-'.$col.'">
                <h2>'.$categoria["nombre"].'</h2>
                <p>'.$categoria["contenido"].'</p>
                <p><a class="btn btn-primary" href="categoria/'.$categoria["id_categoria"].'" role="button">Ver productos &raquo;</a></p>
              </div>
        ';
      }
      ?>
       
        
      </div><!-- /.row -->


<?php
include("views/partials/footer.php");
?>