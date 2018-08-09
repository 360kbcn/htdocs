<h2>tablas de matrices</h2>
<?php
    $filas = 5;
    $columnas = 6;
    $asteriscos = (int)($filas*$columnas/4);
    $matriz = crearTablaBuscaminas($filas,$columnas,$asteriscos);
    dibujarTablaBuscaminas($matriz,$asteriscos);

/* funciones */

function dibujarTablaBuscaminas($matriz,$numAsteriscos)
{
    $filas = sizeof($matriz);
    $columnas = sizeof($matriz[0]);
    $numfilas = $filas-2;
    $numcolumnas = $columnas-2;
    echo "<h3>Tabla Buscaminas $numfilas filas * $numcolumnas columnas con max $numAsteriscos asteriscos</h3>";

    echo "<table border='1' cellpadding='10'>";

    for($i=1; $i < $filas-1; $i++)
    {
        echo "<tr>";
        for($j=1; $j < $columnas-1; $j++)
        {
                    echo "<td>".$matriz[$i][$j]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function crearTablaBuscaminas($filas,$columnas,$numAsteriscos)
{
    $matriz = array();

    // crear matriz  en blanco 2 filas mas alta y 2 columnas mas ancha
    for($i=0; $i < $filas+2; $i++)
    {
        for($j=0; $j < $columnas+2; $j++)
        {
            $matriz[$i][$j] = "x";
        }
    }
    //relleno los asteriscos
    for($n=0; $n < $numAsteriscos; $n++)
    {
            $matriz[rand(1,$filas)][rand(1,$columnas)] = "*";
    }
    $matriznueva = $matriz;
    //Voy mirando cada una de las x que no son asteriscos
    for($i=1; $i <= $filas; $i++)
    {
        for($j=1; $j <= $columnas; $j++)
        {
            if ($matriz[$i][$j] == "x")
            {
                //cuento los * de alrededor para cada uno de ellos
                $n = 0;
                for ($a = -1; $a <= 1; $a++)
                {
                    for ($b = -1; $b <= 1; $b++)
                    {
                        $ia = $i + $a;
                        $jb = $j + $b;
                        $contenido = $matriz[$ia][$jb];
                        if ($matriz[$ia][$jb] == "*")
                            $n++;
                    }

                }
                $matriznueva[$i][$j] = $n;
            }
        }
    }
    return $matriznueva;
}
?>
