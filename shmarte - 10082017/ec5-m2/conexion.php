<?php
require_once('config.php');
try {
    $mysql360 = new PDO("mysql:localhost=$db_url; dbname=$db_name", $db_user, $db_password);
} catch (PDOException $e) {
    echo "<p class ='error'Error>".$e->getMessage();
    exit();
}
 ?>
