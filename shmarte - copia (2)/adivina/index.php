<?php
session_start(); // Abrimos Sesion
require_once('procedure.php');
$val=0;
$retorno=aleatorio(); // Solicitamos el numero Aleatorio al procedimiento aleatorio
if (!isset($_SESSION['numrando'])){
  $_SESSION['numrando']=$retorno; // Grabamos el numero en una variable de Session
  $_SESSION['contador']=0; // Creamos la variable contador para saber el numero de tiradas
}
 ?>
 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <title>Juego Aleatorio</title>
     <link rel="stylesheet" href="propiedades.css">
   </head>
  <body>
   <h1 id="h1">Introduce un Numero</h1>
   <p id="p1">Tienes que introducir un numero entre 1 y 100 para acertar el numero</p>
   <p id="p1">              Tienes 10 intentos ¡¡¡ S U E R T E !!!                </p>
   <form  action="" method="get">
     <input id="box" size="3" maxlength="3" type="number" name="apuesta"> <!-- Pedimos un numero-->
     <br>
     <br>
     <input id="btn1" type="submit" name="btnjugar" value="JUEGA">
     <br>
     <br>
     <input id="btn1" type="submit" name="btnNuevoJuego" value="Nuevo Juego">
    </form>
     <?php
     if(isset($_GET['btnjugar'])){
         $numapuesta=$_GET['apuesta']; // Almacenamos el numero aleatorio en una variable se sesion
         if($numapuesta==0||$numapuesta<1||$numapuesta>100){  // Comprovamos que el numero introducido no es 0 o no es negativo o no es mayor que 100
           header('location:impropio.php');
         // si se da alguno de los tres supuesto anteriores llamamos la funcion DEAD que se encarga de borrar
                // la variable de Session y destruimos la Session y recargamos la pagina index.php

        }
     }
     if (isset($_GET['apuesta'])){
       $_SESSION['contador']=$_SESSION['contador']+1; // contador del numero de tiradas
       $val=$_SESSION['contador'];
       if ($_SESSION['contador']>9) { // Suparados los numeros de intentos llamamos a la pagina intentos. donde informamos que has perdido.
         header('location:intentos.php');
       }
       if($_SESSION['numrando']<$numapuesta){
         echo "<p id='Mensajes'>".$numapuesta." "." Un numero mas bajo </p>";
       }elseif ($_SESSION['numrando']>$numapuesta) {
         echo "<p id='Mensajes2'>".$numapuesta." "."Un numero mas Alto </p>";
       }elseif ($_SESSION['numrando']=$numapuesta) {
         header('location:ganado.php'); // si acertamos el numero llamamos a la pagina ganado.php y informamos de que ha ganado y los intentos que ha necesitado
       }
       echo "<p id ='Mensajes1'>Llevas ".$val." Tiradas "."</p>";
     }
     if (isset($_GET['btnNuevoJuego'])) // Si pulsamos el boton de nueva partida llamamos al procedimiento dead,
                                        // borramos la variable de $_SESSION, destruimos la session y recargamos la pantalla index.php
       dead();
      ?>

   </body>
 </html>
