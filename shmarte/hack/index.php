<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hack</title>
  </head>
  <body>
    <h1>Countries</h1>
    <form action="index.php" method="get">
      <input type="text" name="country" size="80" placeholder="country name">
      <button type="submit">Info country</button>
    </form>
    <?php
    if(isset($_GET['country'])){
      require_once "dbcountry.php";
      $datos = countryDataPrepared($_GET['country']);
      // $datos = countryData($_GET['country']);
      echo "<ul>";
      foreach ($datos as $campo=>$valor) {
        echo "<li><strong>$campo</strong>:$valor</li>";
      }
      echo "</ul>";
        }
     ?>
  </body>
</html>
