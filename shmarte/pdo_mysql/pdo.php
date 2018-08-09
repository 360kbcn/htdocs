<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PDO select -world</title>
  </head>
  <body>
    <h1>PDO select - world</h1>




    <?php
    $user = "root";
    try {
    $con= new PDO("mysql:host=localhost; dbname=world", $user); // tambien se le puede pasar el parametro ,$passw si tenemos password en la base de datos
    // var_dump($con);
  }catch(PDOException $e){
    echo "<p style='color:red;'>".$e->getMessage()."</p>";
    die();
  }

  $sql ="SELECT Continent, count(*) as Paises, sum(Population) as poblacion from country group by Continent;";
  $res = $con->query($sql);

/*
  if (!$res) {
    echo "<p style='color:orange;'>".$con->errorInfo()[2]."</p>"
  }else{
*/

  echo "<table border='1'>";
  echo "<tr><th>Continent</th><th>Paises</th><th>Poblacion</th></tr>";

  foreach($res as $fila) {
    echo "<tr><th>".$fila['Continent']."</th>"."<th>".$fila['Paises']."</th>"."<th>".$fila['poblacion']."</th></tr>";
  }

  echo "</table>";
     ?>

  </body>
</html>
