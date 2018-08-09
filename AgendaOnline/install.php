<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creadro de BBDD AgendaOnline</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <TITLE>Pantalla completa</TITLE>


    <!--Llamada mis CSS3 -->
    <link rel="stylesheet" href="params.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div>
      <p>Conectando con el servidor.</p>
      <br>
      <br>
    <?php
      try {
        $val  = new PDO("mysql:host=localhost","root");
      } catch (PDOException $e) {
        echo "<p class='error'>Error:".$e->getMessage();
        echo "</body></html>";
        exit();
      }
     ?>
    </div>
    <div>
      <p>Conexion Establecida con exito.</p>
      <br>
      <br>
      <?php
      // Borramos la base de datos si existe
      $val->exec("DROP database AgendaOnline;");
       echo "<p>Borrando la base de Datos.</p>";
       echo "<br>";
         echo"<br>";
        echo "<p>Base de datos Borrada</p>";
        echo "<br>";
        echo"<br>";

         // Se crea la base de Datos

         $sqlcontact="create database AgendaOnline;";
         $resul=$val->exec($sqlcontact);
         if($resul==false){
           echo "<p id='Alerta'>No se ha podido crear la base de datos</p>";
           echo"<br>";
           echo "<p>".$val->errorInfo()[2]."</p>";
         }else{
           echo "<p>Base de datos para los Contactos Online creada con exito.</p>";
           echo"<br>";
           echo"<br>";
         }

         // Conectamos con la bases de datos
         $sqlcontact ="use AgendaOnLine;";
         $resul=$val->exec($sqlcontact);
         if(!$resul==false){
           echo "<p id='Alerta'>No se ha podido conectar con la bbdd";
           echo"<br>";
           echo "<p>".$val->errorInfo()[2]."</p>";
         }else{
           echo "<p>Creando Tablas </p>";
           echo"<br>";
           echo"<br>";
         }

         // Creacion de las tablas
         $sqlcontact="create table Admin(id_adm integer primary key auto_increment, user varchar(30) not null, password varchar(8));";


         $resul=$val->exec($sqlcontact);
         if($resul===false){
           echo "<p id='Alerta'>No se ha podido crear la tabla de Administradores</p>";
           echo"<br>";
           echo "<p>".$val->errorInfo()[2]."</p>";
         }else{
           echo "<p>Tabla Administradores Creada con Exito</p>";
           echo"<br>";
           echo"<br>";
         }

         $sqlcontact="create table contactos(id_contacto integer primary key auto_increment, contacto varchar(15) not null, telefono char(9) not null, email char(15));";

         $resul = $val->exec($sqlcontact);
         if($resul===false){
           echo "<p id='Alerta'>No se ha podido crear la tabla de contactos</p>";
           echo"<br>";
           echo "<p>".$val->errorInfo()[2]."</p>";
         }else{
           echo "<p>La tabla de contactos se ha creado correctamente.</p>";
           echo "<br>";
           echo "<br>";
         }
         // Insertamos datos en la tabla contactos
         $sqlcontact = "insert into admin (user, password) values ('Pedro', md5('12345678')), ('Admin', md5('1234'));";
         $resul = $val->exec($sqlcontact);
         if($resul==false){
           echo "<p id='Alerta'>No se ha podido insertar datos en la tabla Admin</p>";
           echo"<br>";
           echo "<p>".$val->errorInfo()[2]."</p>";
         }else{
           echo "<p>Administradores insertados con Exito</p>";
           echo"<br>";
           echo"<br>";
         }

         $sqlcontact ="insert into contactos (contacto, telefono, email) values ('Pedro', '678995325', '360kbcn@gmail.com'), ('Angeles', '696045483', 'asderos@gmail.com');";
         $resul = $val->exec($sqlcontact);
         if($resul==false){
           echo "<pid='Alerta>No se ha podido insertar datos en la tabla contactos</p>";
           echo"<br>";
           echo "<p>".$val->errorInfo()[2]."</p>";
         }else{
           echo "<p>Datos Insertados con Exito</p>";
           echo"<br>";
         }

        ?>
    </div>
    <div>
      <br>
      <br>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--Mis js -->


    </script>





  </body>
</html>
