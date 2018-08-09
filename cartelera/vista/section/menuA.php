

<div class="container-gallery">
    <div class="container">
        <div class="page-header" id="gallery">
            <h1 class="text-center text-danger">CARTELERA</h1>
            <h2 class="text-center">cine...<br /></h2>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-2">

                  <?php

                  $i=$data['cat_actual_id'];
                  $url = $data['urlbase'];
                  if($i === -1){
                    echo "<a class='btn btn-warning' href='$url'>HOME</a>";
                  }else{
                    echo "<a class='btn btn-danger' href='$url'>HOME</a>";
                  }
                  ?>




                    <?php


                        $id_peli = $data['art_actual_id'];
                        $id_Cat = $data['cat_actual_id'];


                      foreach ($data['general'] as $key => $value) {

                        $idC=$value ['ID CATEGORIA'];



                          if($idC==$id_Cat){

                            echo "<a class='btn btn-warning' href='$url/categoria/$idC'>".$value['NOMBRE CATEGORIA']."</a> ";
                          }else{
                            echo "<a class='btn btn-danger' href='$url/categoria/$idC'>".$value['NOMBRE CATEGORIA']."</a> ";

                          }
                      }

                    ?>
            </div>
    </div>
</div>
