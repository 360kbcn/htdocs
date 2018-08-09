<?php
require_once "functions/bdconfig.php";
require_once "functions/dbfunction.php";

session_start();
$user = 'Pinky Lady';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
  <title>Hi <?php echo $user; ?> !!</title>
</head>
<body>
  <header>
    <div class="jumbotron text-center">
      <h1>Hi <?php echo $user; ?> !! </h1>
    </div>
  </header>
  <main>
    <nav class="navbar navbar-default">
      <div class="container">
        <ul class="nav navbar-nav">
          <li><a href="#">Index</a></li>
          <li><a href="#">Modify</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <fieldset>
        <legend><h2>Nueva serie</h2></legend>
        <form class="form-horizontal" method="POST">
          <div class="form-group">
            <label class="control-label col-md-1" for="nombre">Titulo</label>
            <div class="col-md-11">
              <input type="text" class="form-control" name="titulo" id="nombre">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-1" for="gen">Genero</label>
            <div class="col-md-11">
              <input type="text" class="form-control" name="genero" id="gen">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-1" for="img">Url Imagen</label>
            <div class="col-md-11">
              <input type="text" class="form-control" name="imgurl" id="img">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-1" for="Sinopsis">Sinopsis</label>
            <div class="col-md-11">
              <textarea class="form-control" name="sinopsis" id="descripcion" rows="15" maxlength="500" ></textarea>
            </div>
          </div>
          <button class="btn btn-default pull-right resize" type="submit" name="button">Enviar</button>
        </form>
      </fieldset>
    </div>

    <?php


  if(isset($_POST['titulo']) && isset($_POST['genero'])){

          insertarDatos();

   }

     ?>
  </main>
</body>
</html>
