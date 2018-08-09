<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tabla -world</title>
  </head>
  <body>
    <h1>Tabla world</h1>




    <?php
    $user = "root";
    try {
    $con= new PDO("mysql:host=localhost; dbname=world", $user); // tambien se le puede pasar el parametro ,$passw si tenemos password en la base de datos
    // var_dump($con);
  }catch(PDOException $e){
    echo "<p style='color:red;'>".$e->getMessage()."</p>";
    die();
  }

  $sql ="Select Name as Pais, Population as Pobla from country WHERE Continent = 'Europe';";
  $res = $con->query($sql);

/*
  if (!$res) {
    echo "<p style='color:orange;'>".$con->errorInfo()[2]."</p>"
  }else{
*/

  echo "<table border='1'>";
  echo "<tr><th>Pais</th><th>Poblacion</th><th>Col Vacia</th></tr>";

  foreach($res as $fila) {
    echo "<tr><th>".$fila['Pais']."</th>"."<th>".$fila['Pobla']."</th>"; /*."<th>".$fila['poblacion']."</th></tr>"; */
  }

  echo "</table>";
     ?>

  </body>
</html>
