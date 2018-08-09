<?
// Inicio de sesiones.
session_start();

// Se verifica que exista la variable de sesión que contine nuestro numero aleatorio generado.
if (isset($_SESSION['aleatorio'])){
   // Si existe nuestro numero .. empezamos a compararlo con lo que ingresaron por el formulario.
   if ($_SESSION['aleatorio'] == $_POST['numero']){
      echo "Acertastes ";
      // Si acertó .. borramos el número de la sesión y queda listo para que juegue a otro número .. o lo mandes a otro sitio .. o lo que corresponda.
      unset ($_SESSION['aleatorio'];
   } else {
      echo "Intentalo otra vez";
} else {
     // Si no existe variable de sesión con nuestro número .. se entiende que inicia un nuevo juego .. así que se genera y se almacena en la sesión.
    // depende de la versión de PHP que uses .. sdran() es necesario o lo puedes omitir ...
   srand(time());
   #devuelve un numero entre el 1 y el 100
   $_SESSION['aleatorio'] = rand(1, 100);
}

<form action="aleatorio.php" method="PHP">
<input type="text" name="numero">
<input type="submit" name="submit" value=" Probar ">
</form>
