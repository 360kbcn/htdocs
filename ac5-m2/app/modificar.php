<?php
require_once "functions/bdconfig.php";

$validate = $_SESSION['validar'];
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
          <li><a href="users_add.php">Agregar</a></li>
          <li class="active"><a href="modificar.php">Modificar</a></li>
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
      <h2>Seleccione serie a editar</h2>
      <ul class="list-group">
        <?php
        /*******Ejecuta la funcion que edita los datos********/
        if(isset($_POST['titulo']) ) {
          editarDatos();
        }
        /*******************************************************/
        $datos = mostrarDatos();

        $serieEditar = null;
        foreach ($datos as $value) {
          if(isset($_GET['id']) && $value['id']==$_GET['id']) $serieEditar=$value;
          echo "<li class='list-group-item'><a href='?id={$value['id']}'>{$value['titulo']}</a></li>";
        }
        ?>
      </ul>
      <fieldset>
        <legend><h2>Editar Serie</h2></legend>
        <form class="form-horizontal" method="POST" action="">
          <input type="hidden" name="id" value="<?php if($serieEditar!=null) echo $serieEditar['id']; ?>">
          <div class="form-group">
            <label class="control-label col-md-1" for="nombre">Titulo</label>
            <div class="col-md-11">
              <input type="text" class="form-control" name="titulo" id="nombre" value="<?php if($serieEditar!=null) echo $serieEditar['titulo']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-1" for="img">Url Imagen</label>
            <div class="col-md-11">
              <input type="text" class="form-control" name="imgurl" id="img" value="<?php if($serieEditar!=null) echo $serieEditar['imagen']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-1" for="sinopsis">Sinopsis</label>
            <div class="col-md-11">
              <textarea class="form-control resize" name="sinopsis" id="sinopsis" rows="15" maxlength="500" required><?php if($serieEditar!=null) echo $serieEditar['sinopsis']; ?></textarea>
            </div>
          </div>
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </form>
      </fieldset>
    </div>
  </main>
</body>
</html>
