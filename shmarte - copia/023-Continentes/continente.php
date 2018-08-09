
<?php

require_once("db.php");

$continent = "Europe";
if(isset($_GET['c'])){
  $continent = $_GET['c'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $continent; ?></title>
    <link rel="stylesheet" href="continente.css">
  </head>
  <body>
    <h1><?php echo $continent; ?></h1>
    <nav>
      <ul>
        <?php
        $res = getContinentes();
          foreach ($res as $fila) {
            $url = urlencode($fila['continent']);
            if($fila['continent']==$continent)
              echo "<li><a class='actual' href='?c=$url'>${fila['continent']}</a></li>";
            else
            echo "<li><a href='?c=$url'>${fila['continent']}</a></li>";
          }
        ?>
      </ul>
    </nav>
    <main>
      <?php
      $sql = "select name, population from country where continent='$continent';";
      $res = $con->query($sql);
      if($res){
        echo "<table>";
        echo "<tr><th>País</th><th>Población</th></tr>";
        foreach ($res as $fila) {
          echo "<tr><td>${fila['name']}</td>";
          echo "<td>${fila['population']}</td></tr>";
        }
        echo "</table>";
      }else{
        echo "<p style='color:orange;'>".$con->errorInfo()[2]."</p>";
      }
      ?>
    </main>
  </body>
</html>
