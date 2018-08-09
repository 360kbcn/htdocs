<?php
require_once('conexion.php'); // Procedimiento para la conexion con la BBDD

function listado($str){ // Funcion Listado que nos muestra en la pantalla index.php el contenido de la tabla personas
  global $mysql360;
  $nom_lista=$str;
  if ($nom_lista==""){  // si no especificamos en la caja de busqueda ningun dato nos lanza consulta para ver toda la bbdd
    $consql = "select * from personas";
  }else{
  $consql =  "select * from personas where nombre like '%$nom_lista%' or email like '%$nom_lista%';";
  // Si hay datos en el text_box nos lanza una consulta de busqueda del nombre como del email.
}
  $resultado = $mysql360->query($consql); // ejecutamos la consulta
  if(!$resultado) return $mysql360->errorInfo()[2];
  return $resultado->fetchAll(); // devolvemos el resultado
}

  function New_Alta($str1, $str2){ // funcion de alta
  global $mysql360;
  $Nuevo_Nombre=$str1;
  $Nuevo_Email=$str2;
  // recojemos los datos que se an intorucido en la venta de alta
    $sqlcontact = "insert into personas(nombre, email) values ('$Nuevo_Nombre', '$Nuevo_Email');";
  // consulta para añadir datos en la tabla personas
    $resul = $mysql360->exec($sqlcontact);
  // Ejecutamos la consulta
    if($resul==false){
      echo "<p id=Alerta>No se ha podido insertar datos en la tabla contactos</p>";
      echo"<br>";
      echo "<p>".$mysql360->errorInfo()[2]."</p>";
    }else{
      echo "<p id=Bien>Datos Insertados en Contactos con Exito</p>";
      echo"<br>";
    }
  }
  return;

  function borrar($str){ // Funcion borrar datos
    global $mysql360;
    $del_id=$str; // recojemos el id que hay al pulsar sobre el boton papelera
    $sqlcontact = "DELETE from personas where id=$del_id";
    // consulta para el borrado de los datos con el id
    $resul = $mysql360->exec($sqlcontact);
    // Ejecutamos la consulta
  }
  return;

  function erase(){ // funcion de reinicio de toda la bbdd
    global $mysql360;
    // Al pulsar sobre el boton de reinicio se borrar la tabla y se vuelve a reescribir todo
    $sqlerase ="DROP database contactos";
    $resul = $mysql360->exec($sqlerase);
    $sqlcreate = "create database contactos";
    $resul = $mysql360->exec($sqlcreate);
    $sqlperson ="create table personas(id integer primary key auto_increment, nombre varchar(30) not null, email varchar(50) unique)";
    $resul = $mysql360->exec($sqlperson);
    $sqlrelacion ="create table relacion (id_conocedor integer, id_conocido integer, primary key (id_conocedor, id_conocido), foreign key (id_conocedor) references personas (id) on delete cascade, foreign key (id_conocido) references personas (id) on delete cascade )";
    $resul = $mysql360->exec($sqlrelacion);
    $sqlInserperson ="insert into personas(nombre, email) values ('Pedro', 'pedro@gmail.com'), ('Armando', 'arm@jt.com'), ('Barbara', 'br@jt.com'), ('Juan', 'juan@juan@gmail.com'), ('Yolanda', 'Yolanda@aragon.com')";
    $resul = $mysql360->exec($sqlInserperson);
    $sqlInserRelacion ="insert into relacion (id_conocedor, id_conocido) values ('2', '3'), ('1', '2'), ('3', '4'), ('4', '1'), ('1', '5')";
    $resul = $mysql360->exec($sqlInserRelacion);
  }
  return;
 ?>
