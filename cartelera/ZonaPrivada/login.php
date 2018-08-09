<?php
  session_start();
  if(isset($_SESSION['user'])) ;
  if(isset($_POST['user'])){
    $us = $_POST['user'];
    $pw = isset($_POST['password'])?$_POST['password']:"";
    require_once("users.php");
    $validado = validarUser($us, $pw);
    if($validado){
      $_SESSION['user'] = $us;
      header("Location: privada.php");
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <header>
  <div class="jumbotron jumbotron-fluid bg-info ">
      <div class="container">
    <h1 class="display-3">Cartelera</h1>
    <p class="lead">Zona Privada</p>
      </div>
  </div>
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
        <!-- <p class="navbar-brand">Home</p> -->
        <p class="navbar-brand">Zona privada</p>
      </div>


</div>

</nav>
  <section>

    <div class="container">
      <h2>Accede a la Zona privada con tu usuario y contraseña</h2><br><br>
      <!-- Loguearse -->
      <div>
        <form  action="" method="post">
          <div class="form-group">
            <label for="us">Usuario: </label>
            <input type="text" id="us" name="user">
            <label for="pas">Contraseña: </label>
            <input type="password" id="pas" name="password">
            <button type="submit">Acceder</button>
          </div>
        </form>
      </div>
    </div>
  </section>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
