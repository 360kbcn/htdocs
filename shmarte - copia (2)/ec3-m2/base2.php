<?php
$num_to_guess = 42;

$message = "";

if (!isset($_POST[guess])) {

  $message = "Bienvenido a la maquina de adivinar!";

} elseif ($_POST[guess] > $num_to_guess) {

  $message = "$_POST[guess] es my grande! Intente un numero
             menor";

} elseif ($_POST[guess] < $num_to_guess) {

  $message = "$_POST[guess] es muy pequenio! Intente un numero
              mas   grande";

} else { // must be equivalent

  $message = "Bien hecho!";

}

?>

<html>

<head>

<title>Un script de PHP para adivinar un numero</title>

</head>

<body>

<h1>

<?php print $message ?>

</h1>

<form action="" method="POST">

Escriba su numero aqui: <input type="text" name="guess">

</form>

</body>

</html>
