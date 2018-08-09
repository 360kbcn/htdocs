<?php
require_once "functions/dbfunction.php";
require_once "functions/bdconfig.php";

session_start();
$user = 'Pinky Lady';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <header>
    <div class="jumbotron text-center">
      <h1>Hi <?php echo $user; ?> !! </h1>
    </div>
  </header>
  <main>
    <nav class="navbar navbar-default">
      <div class="container">
        <ul class="nav navbar-nav">
          <li><a href="#">Index</a></li>
          <li><a href="#">Modify</a></li>
        </ul>
      </div>
    </nav>
    <?php

    if(isset($_POST['del'])){

            borrarDatos();

     }


    ?>
       <table>
            <tr>
              <th>Id</th>
              <th>titulo</th>
              <th>sinopsis</th>

            </tr>

            <?php
              $show = mostrarDatos();

            foreach ($show as $valor) {
              $id = $valor['id'];
              echo "<tr><td>".$valor['id']."</td>";
              echo "<td>".$valor['titulo']."</td>";
              echo "<td>".$valor['sinopsis']."</td>";
                echo "<td><form action='' method='post'>
                <input type='hidden' name='del' value='$id' />
                <button type='submit'>Eliminar</button>
                </form></td></tr>";

            }

        ?>


  </main>
</body>
</html>
