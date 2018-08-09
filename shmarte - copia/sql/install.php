<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Creador BD cole</title>
  </head>
  <body>
    <h1>Crear BD cole</h1>
    <?php
    try {
      $con  = new PDO("mysql:host=localhost","root");
    } catch (PDOException $e) {
      echo "<p class='error'>Error:".$e->getMessage();
      echo "</body></html>";
      //die();
      exit();
    }
     ?>
     <p>Conexion establecida con MariaDB</p>

     <?php
      $con->exec("drop databases cole3;");
        echo "<p>Base de datos Borrada</p>";

      /* crear la base de datos */
      $sql = "create database cole3;";
      $res = $con->exec($sql);
      if(!$res){
        echo "<p>No se ha podido crear la base de datos</p>";
        echo "<p>".$con->errorInfo()[2]."</p>";
      }else{
        echo "<p>Base de datos creada.</p>";
      }

      /* Conectar a la base de datos */
      $sql = "use cole3;";
      $res = $con->exec($sql);
      if($res===false){
        echo "<p>No se ha podido crear la base de datos</p>";
        echo "<p>".$con->errorInfo()[2]."</p>";
      }else{
        echo "<p>Conexion con BD colegio</p>";
      }

      /* Creamos las tablas  de datos */
      $sql = "create table asignatura(id integer primary key auto_increment,nombre varchar(30) not null);";
      $res = $con->exec($sql);
      if($res===false){
        echo "<p>No se ha podido crear tabla</p>";
        echo "<p>".$con->errorInfo()[2]."</p>";
      }else{
        echo "<p>Tabla asignatura creada</p>";
      }
      $sql = "create table alumno(id integer primary key auto_increment, nombre varchar(30) not null, mail varchar(50) unique);";
      $res = $con->exec($sql);
      if($res===false){
        echo "<p>No se ha podido crear tabla</p>";
        echo "<p>".$con->errorInfo()[2]."</p>";
      }else{
        echo "<p>Tabla alumno creada</p>";
      }
      $sql = "create table alum_asig(alum integer,asig integer,nota float,
  primary key (alum, asig), foreign key (alum) references alumno(id),foreign key (asig) references asignatura(id));";
      $res = $con->exec($sql);
      if($res===false){
        echo "<p>No se ha podido crear tabla</p>";
        echo "<p>".$con->errorInfo()[2]."</p>";
      }else{
        echo "<p>Tabla alum_asig creada</p>";
      }

      $sql = "insert into alumno(nombre, mail) values ('pepe', 'pepe@xxx.com'), ('rodolfo', 'rodolfo@gddg.com');";
      $res = $con->exec($sql);
      if($res===false){
        echo "<p>No se han podido insertar los datos</p>";
        echo "<p>".$con->errorInfo()[2]."</p>";
      }else{
        echo "<p>Datos Insertados correctamente.</p>";
      }






      ?>





  </body>
</html>
