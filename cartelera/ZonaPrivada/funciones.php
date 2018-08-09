<?php

function conexionBD() {
  try{
    $con = new PDO("mysql:host=localhost; dbname=cartelera","root");
  }catch(PDOException $e){
    echo "<p class='bg-danger'>Error:".$e->getMessage()."</p>";
  }
  return $con;
}

function showCategoria() {
  $con = conexionBD();
  $sql = "SELECT * FROM categorias order by id asc;";
  $datos = $con->query($sql);
  if (!$datos){
    echo "<p>".$con->errorInfo()[2]."</p>";
  }else{

  echo "<table border='1' class='table'>";
  echo" <thead class='thead-inverse'>";
  echo "<tr><th>ID</th><th>Nombre</th></tr>";

  foreach ($datos as $fila) {
    echo "<tr><td>".$fila['id']."</td>";
    echo "<td>".$fila['nombre']."</td></tr>";

  }
}
  echo "</table>";
}

function showCartelera() {
  $con = conexionBD();
  $sql = "SELECT * FROM cartelera order by titulo ;";
  $datos = $con->query($sql);
  if (!$datos){
    echo "<p>".$con->errorInfo()[2]."</p>";
  }else{

  echo "<table border='1' class='table'>";
  echo" <thead class='thead-inverse'>";
  echo "<tr><th>ID Categoría</th><th>Titulo</th><th>Director</th><th>Sipnosis</th><th>Año</th></tr>";

  foreach ($datos as $fila) {
    echo "<tr><td>".$fila['categoria_id']."</td>";
    echo "<td>".$fila['titulo']."</td>";
    echo "<td>".$fila['director']."</td>";
    echo "<td>".$fila['sinopsis']."</td>";
    echo "<td>".$fila['anyo']."</td></tr>";

  }
}
  echo "</table>";
}


 function tablaEliminarCategoria() {
   $con = conexionBD();
   $sql = "SELECT * FROM categorias order by id asc;";
   $datos = $con->query($sql);
   if (!$datos){
     echo "<p>".$con->errorInfo()[2]."</p>";
   }else{

   echo "<table border='1' class='table'>";
   echo" <thead class='thead-inverse'>";
   echo "<tr><th>ID</th><th>Nombre</th><th>Nombre URL</th><th>Eliminar</th></tr>";

   foreach ($datos as $fila) {
     echo "<tr><td>".$fila['id']."</td>";
     echo "<td>".$fila['nombre']."</td>";
     echo "<td>".$fila['nombre_url']."</td>";
      echo '<td><a href="eliminarcategoria.php?id='.$fila['id'].'"><button type="button" class="btn btn-danger btn-default btn-smc"><i class="glyphicon glyphicon-trash"></i></button></a></td>';

   }
 }
   echo "</table>";
 }

 function tablaEliminarCartelera() {
   $con = conexionBD();
   $sql = "SELECT * FROM cartelera order by titulo ;";
   $datos = $con->query($sql);
   if (!$datos){
     echo "<p>".$con->errorInfo()[2]."</p>";
   }else{

   echo "<table border='1' class='table table-bordered'>";
   echo" <thead class='thead-inverse'>";
   echo "<tr><th>Titulo</th><th>Director</th><th>Año</th><th>Eliminar</th></tr>";

   foreach ($datos as $fila) {
     echo "<tr><td>".$fila['titulo']."</td>";
     echo "<td>".$fila['director']."</td>";
     echo "<td>".$fila['anyo']."</td>";
       echo '<td><a href="eliminararticulo.php?id='.$fila['id'].'"><button type="button" class="btn btn-danger btn-default btn-smc"><i class="glyphicon glyphicon-trash"></i></button></a></td>';


   }
 }
   echo "</table>";
 }
 function tablaEditarCartelera() {
   $con = conexionBD();
   $sql = "SELECT cartelera.id AS id, cartelera.titulo AS titulo, cartelera.director AS director, cartelera.anyo AS anyo, categorias.nombre AS nombre
   FROM categorias JOIN cartelera ON(categorias.id=cartelera.categoria_id)
   order by cartelera.titulo ;";
   $datos = $con->query($sql);
   if (!$datos){
     echo "<p>".$con->errorInfo()[2]."</p>";
   }else{

   echo "<table border='1' class='table table-bordered'>";
   echo" <thead class='thead-inverse'>";
   echo "<tr><th>Titulo</th><th>Director</th><th>Año</th><th>Categoria</th><th>Editar</th></tr>";

   foreach ($datos as $fila) {
     echo "<tr><td>".$fila['titulo']."</td>";
      echo "<td>".$fila['director']."</td>";
     echo "<td>".$fila['anyo']."</td>";
     echo "<td>".$fila['nombre']."</td>";

       echo '<td><a href="modificararticulo.php?id='.$fila['id'].'"</button><button type="button" class="btn btn-danger btn-default btn-smc"><i class="glyphicon glyphicon-pencil"></i></button></a></td>';


   }
 }
   echo "</table>";
 }


 function addCategoria(){
   $con = conexionBD();
     $nombre = $_POST['nombre'];
     $n_url = $_POST['nombre_url'];
     $sql = "INSERT INTO categorias(nombre, nombre_url) VALUES ('$nombre','$n_url');";
     $exe = $con->exec($sql);
    }


function eliminacategoria($id){
      $con = conexionBD();
       $sql = "SELECT * FROM categorias where id=$id";
       $exe = $con->query($sql);
       $sql_borrar = "DELETE FROM categorias where id=$id";
       $exe_borrar = $con->exec($sql_borrar);
      }

function eliminaarticulo($id){
  $con = conexionBD();
   $sql = "SELECT * FROM cartelera where id=$id";
   $exe = $con->query($sql);
   $sql_borrar = "DELETE FROM cartelera where id=$id";
   $exe_borrar = $con->exec($sql_borrar);

   if($exe_borrar>0) return false;
   else return $exe->fetch();
}

function mostrarCategoriaB($id){
  $con = conexionBD();
  $sql = "SELECT categorias.nombre, categorias.id
  FROM categorias JOIN cartelera ON(categorias.id=cartelera.categoria_id) WHERE cartelera.id=$id";
  $exe = $con->query($sql);

  foreach ($exe as $value) {
    echo $value ['nombre'];
  }
}

function mostrarCategorias(){
  $con = conexionBD();
  $sql = "SELECT nombre, id FROM categorias";
  $exe = $con->query($sql);


  foreach ($exe as $value) {

    $idc = $value['id'];
      echo "<label><input type='radio' name='genero' value='{$value['id']}' required> {$value['nombre']}</label> <br>";

    }
  }

function mostrarpeliculaEditar($id){
 $con = conexionBD();
 $sql="SELECT cartelera.titulo_url AS tituloURL,  cartelera.titulo AS titulo, cartelera.foto AS foto, cartelera.anyo AS 'año', cartelera.director AS director, cartelera.sinopsis AS sinopsis, cartelera.id AS ID_PELICULA,categorias.nombre AS NOMGENERO, categorias.id AS ID_GENERO
 FROM cartelera JOIN categorias ON(cartelera.categoria_id= categorias.id)
 WHERE cartelera.id = $id";
 $exe=$con->query($sql);

 return $exe->fetch();

}

function modificarArticulo(){

  $con= ConexionBD();

if($_POST!=null){

  if(isset($_FILES['fichero'])){
            $archivo = "../vista/imagenes/".$_FILES['fichero']['name']; //destino
            //aqui carga el archivo
            if(move_uploaded_file($_FILES['fichero']['tmp_name'],$archivo)){

                // echo "<p>archivo subido correctamente</p>";
            }else{

              // echo "<p>No se ha podido subir el archivo</p>";
            }
        }

    $sql = "UPDATE cartelera
    SET titulo ='{$_POST['titulo']}', titulo_url = '{$_POST['titulo_url']}', anyo = {$_POST['año']}, director = '{$_POST['director']}', sinopsis = '{$_POST['sinopsis']}', categoria_id = {$_POST['genero']}, foto = '{$_FILES['fichero']['name']}'
    WHERE id = {$_POST['id']};";
    $exe = $con->exec($sql);
    return $con->errorInfo()[2];
}
}

function crearArticulo(){

  $con = ConexionBD();

  if($_POST!=null){

  if(isset($_FILES['fichero'])){
            $archivo = "../vista/imagenes/".$_FILES['fichero']['name']; //destino
            //aqui carga el archivo
            if(move_uploaded_file($_FILES['fichero']['tmp_name'],$archivo)){

                // echo "<p>archivo subido correctamente</p>";
            }else{

              // echo "<p>No se ha podido subir el archivo</p>";
            }
        }

  $titulo = $_POST['titulo'];
  $titulo_url = $_POST['titulo_url'];
  $ano = $_POST['año'];
  $genero = $_POST['genero'];
  $director = $_POST['director'];
  $sinopsis = $_POST['sinopsis'];
  $foto = $_FILES['fichero']['name'];

    $sql="INSERT INTO cartelera(titulo, titulo_url, anyo, categoria_id, director, sinopsis, foto) VALUES ('$titulo', '$titulo_url', '$ano', '$genero', '$director', '$sinopsis', '$foto');";

    $res = $con->exec($sql);
    return $con->errorInfo()[2];

  }
}



 ?>
