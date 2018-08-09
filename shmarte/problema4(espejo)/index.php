<?php
        require_once 'Espejo.php';
        //Parte donde va3subcadena.
        $subparte="";
        $arr=[1,2,3,3];
        //$str = fRevers($arr);
        echo "<div style='border:12px inset green;width:450px;height:150px;position:absolute;top:15%;left:30%'>";
        echo"<center>";
        // Imprime si tiene algo
        if( count($arr)!=0)
            echo "<p><span>Cadena original formato String = '</span>";
        else {
          echo "Cadena original formato String = VACIA'";
        }
        // Mediante un foreach,imprimo los valores  del array.1 línea de todas.
        foreach($arr as $el)
        {
          echo "<span style='font-weight:bolder'>$el</span>";
        }
        echo"'";
        echo"";

        $res = fEspejo($arr);

        if( $res===-2) // N LO HALLA.
        {

            //echo"<br><br><br> NO SE HALLA ESPEJO ALGUNO.VUÉLVELO A INTENTAR!!";
            //echo " : "."<span style='font-weight:bold'>".count($res)." elementos.</span>";
            $res=0;

        }else   // NOS INDICA Q LO HA HALLADO.
        {
          // CUANDO NO HALLA NINGÚN ERROR.
          echo"<p style='position:absolute;top:50px;left:100px'> ESPEJO M&Aacute;XIMO  "; //&oacute;
          /*for($i=0;$i<count($res);$i++)
					{
							echo "$res[$i]";
							if($i< count($res)-1 )
							      echo",";

					}*/
          echo " : <span style='font-weight:bold'> $res ".( $res==1?'elemento.':'elementos.')."</span>";
          echo "</center>";
          echo"</div>";
        }

?>
