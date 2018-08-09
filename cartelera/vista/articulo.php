
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>

<!-- header -->
<?php include_once "vista/section/header.php"; ?>
<!-- fin header -->

<!-- breadcrumb -->
<?php  $idcat = $data ['articulo']['ID_GENERO']; ?>
<?php  $idart = $data ['articulo']['ID_PELICULA']; ?>
<?php  $nomCat =  $data ['articulo']['NOMGENERO']; ?>
<?php  $tituCat =  $data ['articulo']['titulo']; ?>

<div>
 <ol class="breadcrumb" style="margin-top:-20px;">
   <li><a href=" <?php echo $data['urlbase']; ?>">Home</a></li>
   <li><a href="<?php echo "$urlbase/categoria/$idcat"; ?>"><?php echo $nomCat; ?></a></li>
   <li><a href="<?php echo "$urlbase/articulo/$idart"; ?>"><?php echo $tituCat; ?></a></li>
 </ol>

</div>

<!-- fin  breadcrumb -->

<!-- menú -->
<?php include_once "vista/section/menuA.php"; ?>
<!-- fin menú -->

    <?php
    $url=$data['urlbase'];
      $value=$data['articulo'];
        echo '<div class="container">
              <h3 class="my-4"></h3>
              <div class="row">
                <div class="col-xs-6 col-sm-4">
                  <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="'.$url.'/vista/imagenes/'.$value ['foto'].'" alt="">
                  </a>
                </div>
                <div class="col-xs-6 col-sm-5">
                  <p class="text-left">'.$value['titulo'].'</p>
                  <p class="text-left">'.$value['año'].'</p>
                  <p class="text-left">'.$value['director'].'</p>
                  <p class="text-left">'.$value['sinopsis'].'</p>
                </div>
              </div>
          </div>';?>

          <?php include_once "section/footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
