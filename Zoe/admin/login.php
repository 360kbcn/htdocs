<?php 
require_once("php/dades.php");

session_start();

  if(isset($_SESSION["user"])) header("Location: index.php");

  if(isset($_POST["user"])){

    $sessionOK = validarUser($_POST["user"], $_POST["password"]);

    if($sessionOK){

      $_SESSION["user"] = $_POST["user"];
      header("Location: index.php");
    }

  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Login, adping page - Whatapoo</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
      <img src="img/whatapoo_SQ_logo.png" alt="Logo: Whatapoo" width="300px">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="iser" class="sr-only">User</label>
        <input type="text" id="user" name="user" class="form-control" placeholder="User" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>
