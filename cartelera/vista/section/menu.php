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
                      foreach ($data['general'] as $key => $value) {
                        $id=$value['ID CATEGORIA'];
                        if($i==$id){
                          echo "<a class='btn btn-warning' href='$url/categoria/$id'>".$value['NOMBRE CATEGORIA']."</a> ";
                        }else{
                          echo "<a class='btn btn-danger' href='$url/categoria/$id'>".$value['NOMBRE CATEGORIA']."</a> ";
                        }
                      }

                    ?>
            </div>
    </div>
</div>
