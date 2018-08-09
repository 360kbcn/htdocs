<?php
  session_start();
  if(!isset($_SESSION['user'])) header("Location: login.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Zona Privada</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />


</head>
  <body>
    <header>
      <div class="jumbotron jumbotron-fluid bg-info ">

            <div class="float-none">
              <div class="container">
        <h1 class="display-3">Zona Privada</h1>
      </div>
          </div>

      <div class="container">
          <p class="lead">Bienvenido <?php echo $_SESSION['user']; ?> </p>
        <img src="img/user.png" width="100" height="100" alt="foto usuario">

        <a href="index.php"><img src="img/exit.png" width="30" height="30" alt="foto usuario" ></a>


</div>
      </div>
    </div>
      <div class="clear"></div>
    </header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">


        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">Home</a>
        </div>


        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Panel de Control</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Herramientas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="creararticulo.php"><i class="glyphicon glyphicon-plus"></i> Crear pelicula</a></li>
                <li><a href="editarpelicula.php"><i class="glyphicon glyphicon-pencil"></i> Editar película</a></li>
                <li><a href="crearcategoria.php"><i class="glyphicon glyphicon-plus"></i> Crear categoria</a></li>
                <li><a href="editarcategoria.php"><i class="glyphicon glyphicon-pencil"></i> Editar categoria</a></li>
                  <li><a href="eliminarcategoria.php"><i class="glyphicon glyphicon-trash"></i> Eliminar categoria</a></li>
              </ul>
            </li>
          </ul>

  </div>
  </div>

  </nav>
    <main>
<div class="container">
  <h1>Editar Categoría</h1>
  <p class="lead">Modifica los campos relacionados con las categorias. </p>

  <form>


<div class="form-group">
<label for="exampleSelect1">ID Categoría</label>
<select class="form-control" id="IdSelect1">
<option>1 - Intriga</option>
<option>2 - Acción</option>
<option>3 - Animación</option>
<option>4 - Aventuras</option>
<option>5 - Terror</option>
<option>6 - Comedia</option>
<option>7 - Drama</option>
<option>8 - Romantica</option>
</select>
</div>
<div class="form-group">
        <label for="name">Nombre:</label>
        <input type="name" class="form-control" name="nombre" required>
</div>


<div class="form-group">
        <label for="name">Nombre Url:</label>
        <input type="name" class="form-control" name="nombre" required>
</div>
<div class="form-group">
<label for="exampleTextarea">Descripción</label>
<textarea class="form-control" id="Textarea" rows="3"></textarea>
</div>

<button type="submit" class="btn btn-primary">Crear</button>
</form>

</div>
  </main>




<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
  </body>
</html>
