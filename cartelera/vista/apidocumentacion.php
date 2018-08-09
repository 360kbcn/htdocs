<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Documentacion api</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>

<body>
 <!-- header -->
<?php require_once "/section/header.php"; ?>
<!-- fin header -->

<ol class="breadcrumb" style="margin-top:-20px;">
  <li><a href="<?php echo $data['urlbase']; ?>">Home</a></li>
  <li><a href="<?php echo "$urlbase/api/"; ?>">Api</a></li>

</ol>

      <div class="panel panel-default">
      <div class="panel-heading">

              <h1>Documentación api</h1>
          </div>
          <div class="panel-body">
          <p class="lead">Realizamos una breve explicación de la api de busqueda en nuestra web para que puedas utilizarla donde creas oportuno</li>
          <h2>Api para usar las busqueda en web Cartelera</h2>
          <ul>
          <li>GET <b>/api/</b> Documentación.</li>
          <li>GET <b>/api/articulos</b> Devuelve toda la información de las peliculas que tengamos en la base de datos. </li>
          <li>GET <b>/api/articulos/id</b> Devuelve toda la información de las peliculas identificadas con {id}. Como imagen, devuelve la URL de la imagen.</li>
          <li>GET <b>/api/genero/id</b> Devuelve toda la información de las peliculas que tengamos en la base de datos por genero </li>
          </ul>
          <p class="lead">Ejemplos de utilización de la api.</p><b>"Nota" ver mejor los resultados con navegador firefox</b>
          <ul>
          <li> <a href="articulos" target="blank"> Busqueda de todas las peliculas que hay en la cartelera envio en Json</a></li>
          <li> <a href="articulos/1" target="blank"> Busca la pelicula con identificador 1 hay en la cartelera envio en Json</a></li>
          <li> <a href="genero/1" target="blank"> Busca las peliculas del genero con identificador 1 que hay en la cartelera envio en Json</a></li>
          </ul>
          </div>


      </div>
    <!-- Footer -->
    <?php include_once "section/footer.php"; ?>


    <!-- fin footer -->
    </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js" </script>

</html>
