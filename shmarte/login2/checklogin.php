<?php
session_start();
?>
<?php
ob_start(); // Iciciamos el Control de Buffer esto lo uso para que header
            // no me de problemas cuado redirecciono las paginas
 ?>
<?php

// valores para la conexion PDO

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "mms";
$tbl_name = "usuario";

// Control de Conexion PDO
try{
  $conexion= new PDO("mysql:host=$host_db;dbname=$db_name",$user_db,$pass_db);
}catch(PDOException $e){
  echo "<p class'error'>Error:".$e->getMessage();
  exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

// Consulta para la seleccion de los datos de usuario en la tabla

$sql = "SELECT * FROM $tbl_name WHERE username = '$username' and password='$password'";

$result = $conexion->query($sql);


 $row = $result->fetch();
 if ($password==$row['password']) {
// Apertura de Sesion
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>";

 } else { // Opcion de dar de alta el usuario
   echo "<form action='' method='post'>";
   echo "<input name='username' type='hidden' value='$username'>";
   echo "<input name='password' type='hidden' value='$password'>";
   echo "Username o Password incorrectos deseas crearlos.";
   echo "<br><br>";
   echo "<input type='submit' name='Alta' value='Dar de Alta'>";
   echo "<br><br>";
   echo "<input type='submit' name='Volver' value='Volver'>";
   if(isset($_POST['Alta'])){
     // Insercion del nuevo usuario en la tabla
     $sql = "INSERT INTO usuario (username, password) VALUES ('$username', '$password')";

     $result = $conexion->exec($sql);

     header("location:login.html");
 }
 if(isset($_POST['Volver'])){
   echo "</form>";
   header("location:login.html");

 }
 }

 $conexion=null; // Cerramos la conexion abierta del PDO

 ?>

 <?php
ob_end_flush(); // Vaciamos el Buffer
  ?>
