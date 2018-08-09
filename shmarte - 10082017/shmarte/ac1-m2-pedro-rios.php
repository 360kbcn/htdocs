<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Suma Numeros</title>
    </head>
    <body>
        <h1>Suma Numeros</h1>
        <form method="get" action="ac1-m2-pedro-rios.php">
            <input type="number" name="n1" value="0">
            <input type="submit">
        </form>
        <?php
        $n1 = 0;

        if(isset($_GET['n1']) && $_GET['n1']!="")
            $n1 = $_GET['n1'];

        $sum = $n1 + $n2;
        if(isset($_GET['n1']))
            echo "<p>$n1 + $n2 = $sum</p>";
        ?>
    </body>
</html>
