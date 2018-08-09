<?php
require_once "../api/functions/bdconfig.php";
if (isset($_POST['user'])) {
  $_SESSION['user'] = $_POST['user'];
  $_SESSION['pass'] = $_POST['pass'];
}

$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$validate = login($user, $pass);

if (!$validate) {
  header ("Location: http://localhost/miguel/practica_mms/");
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
          <li><a href="modificar.php">Editar</a></li>
          <li class="active"><a href="">Eliminar</a></li>
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
      if(isset($_POST['del'])){

            borrarDatos();

     }
      ?>
      <h2>Eliminar datos de la serie</h2>
    <table class="table">
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Genero</th>
        <th></th>
      </tr>

      <?php
          $datos = mostrarDatos();



          foreach ($datos as $value) {

            $id = $value['id'];
            echo "<tr><td>".$value['id']."</td>";
            echo "<td>".$value['titulo']."</td>";
            echo "<td>".$value['genero']."</td>";
            echo "<td><form action='' method='post'>
                <input type='hidden' name='del' value='$id' />
                <button type='submit'>Eliminar</button>
                </form></td></tr>";;
          }

       ?>
    </table>




  </main>
</body>
</html>
