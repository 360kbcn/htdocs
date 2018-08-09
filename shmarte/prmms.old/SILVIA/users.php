<?php
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
    <fieldset>
      <legend><h2>Introduzca nueva película</h2></legend>
      <form>
        <b>Nombre:</b> <input type="text" class="form-control" name="nombre" /><br>
        <b>Nombre Url:</b> <input type="text" class="form-control" name="nombre_url" /><br>
        <b>Descripción:</b> <textarea name="descripcion" class="form-control" rows="15" maxlength="500"></textarea>
        <input type="submit" value="Enviar" />
      </form>
    </fieldset>

  </main>
</body>
</html>
