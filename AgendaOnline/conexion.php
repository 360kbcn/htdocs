<?php
// Funcion para la conexion con la BBDD
require_once('config.php');
try {
    $mysql360 = new PDO("mysql:localhost=$db_url; dbname=$db_name", $db_user, $db_password);
    // Se establece la conexion con la BBDD contactos con los parametro especificados en config
} catch (PDOException $e) {
    echo "<p class ='error'Error>".$e->getMessage();
    exit();
}
 ?>
