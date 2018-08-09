<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>ADIVINA NUMERO....!!!</title>
  </head>
  <body>
    <h1>ADIVINA EL NUMERO....!!!!</h1>
    <form action=" " method="post">
      Introduce Un Numero: <input type="text" name="apuesta" >
      <input type="submit" name="btnjugar" value="JUEGA">
      <input type="submit" name="btnuevo" value="NUEVO JUEGO">
    </form>
    <?php
    session_start();
    if (isset($_GET['btnjugar'])){
      $numero=$_GET['apuesta'];
      $_SESSION['I']=$_SESSION['I']+1;
      $_SESSION['A'][$_SESSION['I']-1][0]=$numero;

        if ($numero==""||$numero<1||$numero>100) {
          header('location:base.php');
          session_destroy();
        }

        if (isset($_SESSION['aleatorio'])==false) {
          $_SESSION['contador']=0;
          $_SESSION['aleatorio']= rand(1,100);
        }
       if (isset($_SESSION['aleatorio'])) {
         $_SESSION['contador']=$_SESSION['contador']+1;
         if ($_SESSION['aleatorio']<$numero) {
           $_SESSION['A'][$_SESSION['I']-1][0]=$numero." es alto";
         }elseif ($_SESSION['aleatorio']>$numero) {
          $_SESSION['A'][$_SESSION['I']-1][0]=$numero." es bajo";
       }elseif ($_SESSION['aleatorio']=$numero) {
          $_SESSION['A'][$_SESSION['I']-1][0]=$numero." ACIERTO  en ".$_SESSION['contador']."Intentos";
        }
      for ($i=0; $i<$_SESSION[I] ; $i++) {
        echo $_SESSION['A'][$i][0]."<br>";
      }
    }
  }
  if (isset($_GET['btnuevo'])) {
    session_destroy();
  }
     ?>
  </body>
</html>
