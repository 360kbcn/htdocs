!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="params.css">
    <title>Creador BBDD MyAgenda</title>
  </head>
  <body background-color="white">
    <h1>Crear BBDD</h1>
    <?php
    try {
      $val  = new PDO("mysql:host=localhost","root");
    } catch (PDOException $e) {
      echo "<p class='error'>Error:".$e->getMessage();
      echo "</body></html>";
      exit();
    }
     ?>
     <p id="Bien">Conexion Establecida </p>
     <br>
     <?php
     // Borramos la base de datos si existe
     $val->exec("DROP database MyAgenda;");
      echo "<p id='Alerta'>La base de datos se borrara</p>";
      echo "<br>";
       echo "<p id='Bien'>Base de datos Borrada</p>";
       echo "<br>";

        // Se crea la base de Datos

        $sqlcontact="create database MyAgenda;";
        $resul=$val->exec($sqlcontact);
        if($resul==false){
          echo "<p id='Alerta'>No se ha podido crear la base de datos</p>";
          echo"<br>";
          echo "<p>".$val->errorInfo()[2]."</p>";
        }else{
          echo "<p id='Bien'>Base de datos MyAgenda creada con exito.</p>";
          echo"<br>";
        }

        // Conectamos con la bases de datos
        $sqlcontact ="use MyAgenda;";
        $resul=$val->exec($sqlcontact);
        if(!$resul==false){
          echo "<p id='Alerta'>No se ha podido conectar con la bbdd";
          echo"<br>";
          echo "<p>".$val->errorInfo()[2]."</p>";
        }else{
          echo "<p id='Bien'>Conexion Establecida </p>";
          echo"<br>";
        }

        // Creacion de las tablas
        $sqlcontact="create table login(id integer primary key auto_increment, alias char(15) not null, password varchar(8) unique);";
        $resul=$val->exec($sqlcontact);
        if($resul===false){
          echo "<p id='Alerta'>No se ha podido crear la tabla MyAgenda</p>";
          echo"<br>";
          echo "<p>".$val->errorInfo()[2]."</p>";
        }else{
          echo "<p id='Bien'>Tabla MyAgenda Creada con Exito</p>";
          echo"<br>";
        }
/*
        $sqlcontact="create table myagenda (id_registro primary key auto_increment, nombre Char(15), telefono(9);";
        $resul = $val->exec($sqlcontact);
        if($resul===false){
          echo "<p id='Alerta'>No se ha podido crear la tabla relacion</p>";
          echo"<br>";
          echo "<p>".$val->errorInfo()[2]."</p>";
        }else{
          echo "<p id='Bien'>Tabla Relacion Creada y relacionada con Exito</p>";
          echo "<br>";
        }
        // Insertamos datos en la tabla MyAgenda
        $sqlcontact = "insert into login(Alias, email) values ('Pedro', '12345678');";
        $resul = $val->exec($sqlcontact);
        if($resul==false){
          echo "<pid='Alerta'>No se ha podido insertar datos en la tabla MyAgenda</p>";
          echo"<br>";
          echo "<p>".$val->errorInfo()[2]."</p>";
        }else{
          echo "<p id='Bien'>Datos Insertados en MyAgenda con Exito</p>";
          echo"<br>";
        }

        $sqlcontact ="insert into myagenda (nombre, telefono) values ('Angeles', '678995325'), ('Pedro', '678995325');";
        $resul = $val->exec($sqlcontact);
        if($resul==false){
          echo "<pid='Alerta>No se ha podido insertar datos en la tabla Relacion</p>";
          echo"<br>";
          echo "<p>".$val->errorInfo()[2]."</p>";
        }else{
          echo "<p id='Bien'>Datos Insertados con Exito</p>";
          echo"<br>";
        }
*/
       ?>

  </body>
</html>
