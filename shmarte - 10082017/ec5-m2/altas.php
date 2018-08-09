<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <h1>Insertamos Datos en la tabla</h1>
  <body>
  <form method="get" action="">
    Nombre   :<input type="Text" name="nombre"><br>
    E-mail   :<input type="Text" name="email"><br>
    <input type="Submit" name="enviar" value="Aceptar información">
</form>
  <?php
// process form
if(isset($_GET['enviar'])){
  $nombre=$_GET['nombre'];
  $email=$_GET['email'];
}
try {
  $val  = new PDO("mysql:host=localhost","root");
} catch (PDOException $e) {
  echo "<p class='error'>Error:".$e->getMessage();
  echo "</body></html>";
  exit();
}
$sqlcontact ="use contactos;";
$resul=$val->exec($sqlcontact);
if(!$resul==false){
  echo "<p id='Alerta'>No se ha podido conectar con la bbdd";
  echo"<br>";
  echo "<p>".$val->errorInfo()[2]."</p>";
}else{
  echo "<p id='Bien'>Conexion Establecida </p>";
  echo"<br>";
}
$sqlcontact = "insert into contactos(nombre, email) VALUES ('$nombre', '$email')";
$resul=$val->exec($sqlcontact);
if($resul===false){
  echo "<p id='Alerta'>No se ha podido agragar datos";
  echo"<br>";
  echo "<p>".$val->errorInfo()[2]."</p>";
}else{
  echo "¡Gracias! Hemos recibido sus datos.\n";
}
   ?>
  </body>
</html>
