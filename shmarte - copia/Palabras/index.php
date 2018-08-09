<?php
session_start();
  //if (!isset($_SESSION['intro'])) {
  //  $_SESSION['intro']=[];
  if(!isset($_SESSION['lista'])) $_SESSION['lista']=[];
  if(isset($_POST['word'])) $_SESSION['lista'][]=$_POST['word'];

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Palabras</title>
  </head>
  <body>
    <h1>Palabras</h1>
    <p>Introduce una palabra</p>
    <form action="" method="post">
      <label for="pal">Palabra</label>
      <input type="text" id="pal" size="10" name="word" >
      <button type="submit">Grabar</button>
    </form>
     <br>
     <a href="palabras.php">Ver lista</a><br>
     <a href="fin_palabras.php>">Finalizar Sesion</a>

  </body>
</html>
