<?php
?>
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

<?php
foreach ($data['categorias'] as $key => $value) {
  $generoB = $value['Genero'];
  $idcat = $value['IDC'];
}

 ?>

<div>
  <ol class="breadcrumb" style="margin-top:-20px;">
    <li><a href=" <?php echo $data['urlbase']; ?>">Home</a></li>
    <li><a href="<?php echo "$urlbase/categoria/$idcat"; ?>"><?php echo $generoB; ?></a></li>
  </ol>

</div>

<!-- fin  breadcrumb -->

<!-- menú -->
<?php include_once "vista/section/menu.php"; ?>
<!-- fin menú -->
<hr>
<div class="row">
  <div class="col-md- col-md-offset-3" style="margin-top:30px;">


    <?php
    $url=$data['urlbase'];
      foreach ($data['categorias'] as $key => $value) {
        $id_peli= $value['ID_PELICULA'];
        // $generoB = $value['Genero'];
        echo '<div class="col-lg-4">
          <img class="espacio-imagen center-block img-responsive" src="'.$url.'/vista/imagenes/'.$value ['foto'].'" alt="poster" width="140" height="140">
          <h4 class="text-center">'.$value['titulo'].'</h4>
          <p class="text-center"><a class="btn btn-default" href="'.$url.'/articulo/'.$id_peli.'" role="button">Descripcion >></a></p>
        </div>';
      }
    ?>

  </div>
</div>


<?php include_once "section/footer.php"; ?>



<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
