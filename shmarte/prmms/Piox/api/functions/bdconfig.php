<?php
session_start();
function newDataBase() {
  try{
    $con = new PDO("mysql:host=localhost","root");
  }catch(PDOException $e){
    echo "<p class='bg-danger'>Error:".$e->getMessage()."</p>";
    echo "</body></html>";
    die();
  }

  return $con;
}

function dbConection() {
  try{
    $con = new PDO("mysql:host=localhost; dbname=mms","root");
  }catch(PDOException $e){
    echo "<p class='bg-danger'>Error:".$e->getMessage()."</p>";
  }

  return $con;
}

function salir() {

  $_SESSION=[];
  session_destroy();
  header('Location: ../');
}

function insertarDatos() {
  //conectar con base de datos
  $con = dbConection();

  $titulo = $_POST['titulo'];
  $genero = $_POST['genero'];
  $imgurl = $_POST['imgurl'];
  $sinopsis = $_POST['sinopsis'];


  $titurl = urldecode($titulo);
  $genurl = urlencode($genero);
  $genurl = strtolower($genurl);

  /* insertar datos */

  $sql = "INSERT INTO genero(id, genero, genero_url)
  VALUES ('', '$genero', '$genurl')";

  $res = $con->exec($sql);
  // if($res===false){
  //   echo "<div class=''><p>No se han podido insertar los datos.</p><p>".$con->errorInfo()[2]."</p></div>";
  // }else{
  //   echo "<div class=''><p>Genero añadido correctamente.</p></div>";

  $sql = "SELECT id FROM genero WHERE genero = '$genero'";

  $res = $con->query($sql);

  $sql = "INSERT INTO series(id, titulo, titulo_url, imagen, sinopsis, genero)
  VALUES ('', '$titulo', '$titurl', '$imgurl', '$sinopsis', '{$res->fetch()['id']}')";

  $res = $con->exec($sql);
  if($res===false){
    echo "<div class=''><p>No se han podido insertar los datos.</p><p>".$con->errorInfo()[2]."</p></div>";
  }else{
    echo "<div class='container'><p class='text-center text-success'>Formulario añadido correctamente.</p></div>";
  }
}

function login($user, $pass) {
  $boolean = false;
  $con = dbConection();

  $sql = "SELECT * FROM usuario WHERE username='$user' and password='$pass';";
  $result = $con->query($sql);
  $row = $result->fetchAll(PDO::FETCH_ASSOC);

  foreach ($row as $value) {
    if ($value['username']==$user && $value['password']==$pass) {
      $boolean = true;
    }
  }

  return $boolean;
}
