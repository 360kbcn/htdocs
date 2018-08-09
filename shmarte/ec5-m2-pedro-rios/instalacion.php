
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="params.css">
    <title>Creador BBDD MyAgenda</title>
  </head>
  <body background="fondo360.png">
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
        $sqlcontact="create table personas(id integer primary key auto_increment, nombre varchar(30) not null, email varchar(50) unique);";
        $resul=$val->exec($sqlcontact);
        if($resul===false){
          echo "<p id='Alerta'>No se ha podido crear la tabla MyAgenda</p>";
          echo"<br>";
          echo "<p>".$val->errorInfo()[2]."</p>";
        }else{
          echo "<p id='Bien'>Tabla MyAgenda Creada con Exito</p>";
          echo"<br>";
        }

        $sqlcontact="create table relacion (id_conocedor integer, id_conocido integer, primary key (id_conocedor, id_conocido), foreign key (id_conocedor) references personas (id) on delete cascade, foreign key (id_conocido) references personas (id) on delete cascade );";
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
        $sqlcontact = "insert into personas(nombre, email) values ('Pedro', 'pedro@gmail.com'), ('Armando', 'arm@jt.com'), ('Barbara', 'br@jt.com'), ('Juan', 'juan@juan@gmail.com'), ('Yolanda', 'Yolanda@aragon.com');";
        $resul = $val->exec($sqlcontact);
        if($resul==false){
          echo "<pid='Alerta'>No se ha podido insertar datos en la tabla MyAgenda</p>";
          echo"<br>";
          echo "<p>".$val->errorInfo()[2]."</p>";
        }else{
          echo "<p id='Bien'>Datos Insertados en MyAgenda con Exito</p>";
          echo"<br>";
        }

        $sqlcontact ="insert into relacion (id_conocedor, id_conocido) values ('2', '3'), ('1', '2'), ('3', '4'), ('4', '1'), ('1', '5');";
        $resul = $val->exec($sqlcontact);
        if($resul==false){
          echo "<pid='Alerta>No se ha podido insertar datos en la tabla Relacion</p>";
          echo"<br>";
          echo "<p>".$val->errorInfo()[2]."</p>";
        }else{
          echo "<p id='Bien'>Datos Insertados con Exito</p>";
          echo"<br>";
        }

       ?>

  </body>
</html>
