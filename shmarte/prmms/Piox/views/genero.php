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
    <div class="jumbotron">
      <div class="container">
        <h1>PinkLadySeries</h1>
      </div>
    </div>
  </header>
  <main>
    <nav class="navbar navbar-default">
      <div class="container">
        <ul class="nav navbar-nav">
          <li><a href='<?php echo $data['urlbase'];?>'>Home</a></li>
          <li><a href='<?php echo $data['urlbase'];?>/series'>Series</a></li>
          <li class="active"><a href='<?php echo $data['urlbase'];?>/genero'>Genero</a></li>
          <li><a href='<?php echo $data['urlbase'];?>/apirest' target="_blank" >Documentacion (API)</a></li>
        </ul>
        <form action="<?php echo $data['urlbase'];?>/app/users_add.php" method="POST" class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Usuario" name="user" required>
            <input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>
        </form>
      </div>
    </nav>
    <div class="container">
      <?php
      echo "<div class='row'>";
      foreach ($data['genero'] as $valor) {
        echo "<div class='col-ml-6'>";
        echo "<a href='{$data['urlbase']}/genero/{$valor['id']}' class='btn btn-default btn-lg btn-block' role='button'>{$valor['genero']}</a><br>";
        echo "</div>";
      }
      echo "</div>";
      ?>
    </div>
  </main>
</body>
</html>
