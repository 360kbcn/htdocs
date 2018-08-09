
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
    $con = new PDO("mysql:host=localhost; dbname=pinkladyseries","root");
  }catch(PDOException $e){
    echo "<p class='bg-danger'>Error:".$e->getMessage()."</p>";
  }

  return $con;
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
                                                /****Extraer ultimo ID para insertarlo en la tabla series****/
  $sql = "SELECT id FROM genero WHERE genero = '$genero'";

  $res = $con->query($sql);

  $sql = "INSERT INTO series(id, titulo, titulo_url, imagen, sinopsis, genero)
  VALUES ('', '$titulo', '$titurl', '$imgurl', '$sinopsis', '{$res->fetch()['id']}')";
                                                              //Insertar ID categoria en tabla series
  $res = $con->exec($sql);
  if($res===false){
    echo "<div class=''><p>No se han podido insertar los datos.</p><p>".$con->errorInfo()[2]."</p></div>";
  }else{
   
    echo "<div class='container'><p class='text-center text-success'>Serie añadida correctamente.</p></div>";
  }
}

function mostrarDatos(){

            $con = dbConection();

            $sql ="SELECT s.id, s.titulo, g.genero, s.imagen, s.sinopsis
                  FROM series s, genero g
                  WHERE s.genero = g.id";


            $res = $con->query($sql);

            return $res->fetchAll(PDO::FETCH_ASSOC);
      }

function editarDatos() {
  //conectar con base de datos
  $con = dbConection();

  $id = $_POST['id'];
  $titulo = $_POST['titulo'];
  $imgurl = $_POST['imgurl'];
  $sinopsis = $_POST['sinopsis'];

  $titurl = urldecode($titulo);
  

  /* modificar datos */

  $sql = "UPDATE series
          SET titulo = '$titulo', titulo_url = '$titurl', imagen = '$imgurl', sinopsis = '$sinopsis'
          where id = $id;";

  $res = $con->exec($sql);

  if($res===false){
    echo "<div class=''><p>Error al editar los datos</p><p>".$con->errorInfo()[2]."</p></div>";
  }else{
    echo "<div class='container'><p class='text-center text-success'>Datos editados correctamente.</p></div>";
  }
}

function borrarDatos(){

          $con = dbConection();

                $id = $_POST['del'];

                $sql = "DELETE FROM series WHERE series.id = {$id};";

                $res = $con->exec($sql);
                if($res===false){
                  echo "<p>No se ha podido eliminar la serie.</p><p>".$con->errorInfo()[2]."</p>";

                }else{
                  echo "<div class='container'><p class='text-center text-success'>Serie eliminada correctamente.</p></div>";

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

function salir() {

  $_SESSION=[];
  session_destroy();
  header('Location: ../');
}