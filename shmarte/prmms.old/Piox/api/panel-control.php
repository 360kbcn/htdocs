<?php
session_start();

// $now = time();

$_SESSION['loggedin'] = true;

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
  echo "Esta pagina es solo para usuarios registrados.<br>";
  echo "<br><a href='login.html'>Login</a>";
  echo "<br><br><a href='index.html'>Registrarme</a>";
  exit;
}

// if($now > $_SESSION['expire']) {
//   session_destroy();
//
//   echo "Su sesion a terminado,
//   <a href='login.html'>Necesita Hacer Login</a>";
//   exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <title>Panel de Control</title>
</head>
<body>
  <header class="jumbotron">
    <div class="container">
      <h1>Panel de Control</h1>
    </div>
  </header>
  <main>
    <nav class="navbar navbar-default">
      <div class="container">
        <ul class="nav navbar-nav">
          <li><a href="#">Agregar</a></li>
          <li><a href="#">Modificar</a></li>
          <li><a href="#">Borrar</a></li>
        </ul>
      </div>
    </nav>
  </main>
  <a href=logout.php>Cerrar Sesion X</a>
</body>
</html>
