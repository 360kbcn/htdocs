<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <link rel="icon" href="<?php echo $data["url"];?>/img/favicon.ico">

    <title>Documentació API Whatapoo</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">


  </head>

  <body>

    <!-- Fixed navbar -->

    <div class="container">

      <div class="page-header">
        <h1>Documentación  API Whatapoo</h1>
        <p class="lead">El Whatapoo API es una interfaz disponible públicamente que permite a los desarrolladores acceder al rico conjunto de datos Whatapoo. La interfaz es estable y próximamente será utilizada por las aplicaciones móviles de Whatapoo. Sin embargo, ocasionalmente se realizan cambios para mejorar el rendimiento y mejorar las funciones.</p>
      </div>
      <h3>Métodos de solicitud</h3>
      <p>Siempre que sea posible, nuestra pooAPI se esfuerza por utilizar verbos HTTP apropiados para cada acción.</p>
      <p>Hasta el momento esta API solo utiliza el verbo GET.</p>
      <ul>
        <li><strong>GET</strong>	utilizado para recuperar recursos.</li>
      </ul>

      <h3>Artículos</h3>
      <p>Las URL’s que implementa la API son las siguientes:
      <p>Para obtener 1 artículo</p>
      <ul>
        <!-- <p>la ruta de ejemplo:</p> -->
          <ul>
            <p><strong>/api/articulos/{id}</strong></p>
          </ul>
      </ul>
      <p>Para la obtención de todos los articulos</p>
      <ul>
        <!-- <p>Ruta de ejemplo: </p> -->
        <ul>
          <p><strong>/api/articulos</strong></p>
        </ul>
      </ul>
      <p>Para el filtrado por categorias<p>
      <ul>
        <!-- <p>Ruta de ejemplo:</p> -->
        <ul>
          <p><strong>/api/articulos?categoria={id}</strong></p>
        </ul>
      </ul>
      <p>Lista de categorias<p>
      <ul>
        <?php 
        foreach ($data["llistat"] as $categoria) {
          
          echo '<li>
                  <p>'.$categoria["nombre"].' (id:<strong>'.$categoria["id_categoria"].'</strong>)</p>
                </li>';
        }
        ?>
        
      </ul>

      <h3>Apoyo</h3>
      <p>Para preguntas generales sobre API, utilice el Grupo de Google API de Whatapoo.
      <p>Para ponerse en contacto con un ingeniero de Whatapoo   API, por favor envíe un correo electrónico a la dirección de abajo. Se agradecen todas las preguntas, comentarios y reportes de errores.</p>
      <p><strong>desarrolladores@whatapoo.com</strong></p>
      <p>Por favor, limite sus preguntas a las específicas de la API.</p>
      <p>La marca Whatapoo así como su mojon (poopy) son marcas registradas ®</p>

    </div> <!-- /container -->


  </body>
</html>