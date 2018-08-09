<?php
require_once "functions/bdconfig.php";
if (isset($_POST['user'])) {
  $_SESSION['user'] = $_POST['user'];
  $_SESSION['pass'] = $_POST['pass'];
}
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$validate = login($user, $pass);
$_SESSION['validar'] = $validate;
if (!$validate) {
  header ("Location: http://localhost/ac5-m2/");
 }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/styles.css">
  <meta charset="utf-8">
  <title>Panel De Control</title>
</head>
<body>
  <header>
    <div class="jumbotron">
      <div class="container">
        <h1>Panel De Control</h1>
      </div>
    </div>
  </header>
  <main>
    <nav class="navbar navbar-default">
      <div class="container">
        <ul class="nav navbar-nav">
          <li class="active"><a href="users_add.php">Agregar</a></li>
          <li><a href="modificar.php">Modificar</a></li>
          <li><a href="eliminar.php">Eliminar</a></li>
        </ul>
        <form class="" action="" method="POST">
          <button class="btn btn-default glyphicon glyphicon-off navbar-btn navbar-right" type="submit" name="logout" value="true"></button>
        </form>
      </div>
    </nav>
    <div class="container">
      <?php
      if (isset($_POST['logout']) && $_POST['logout']="true") {
        salir();
      }
      ?>
      <fieldset>
        <legend><h2>Nueva serie</h2></legend>
        <form class="form-horizontal" method="POST" action="">
          <div class="form-group">
            <label class="control-label col-md-1" for="nombre">Titulo</label>
            <div class="col-md-11">
              <input type="text" class="form-control" name="titulo" id="nombre" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-1" for="gen">Genero</label>
            <div class="col-md-11">
              <input type="text" class="form-control" name="genero" id="gen" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-1" for="img">Url Imagen</label>
            <div class="col-md-11">
              <input type="text" class="form-control" name="imgurl" id="img" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-1" for="sinopsis">Sinopsis</label>
            <div class="col-md-11">
              <textarea class="form-control resize" name="sinopsis" id="sinopsis" rows="15" maxlength="500" required></textarea>
            </div>
          </div>
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </form>
      </fieldset>
    </div>
    <?php
    if(isset($_POST['titulo']) && isset($_POST['genero'])) {
      insertarDatos();
    }
    ?>
  </main>
</body>
</html>
