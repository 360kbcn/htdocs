<?php
    use PHPUnit\Framework\TestCase;// Indica donde está el TestCase
		// ESPEJO CORRECTO.Dm 27_09_17
		function fEspejo($a){


				$num_els=count($a);//Numero combinaciones de n elementos.
        // Hacerme una copia del array en cadena para hacer comparaciones..
				$strCadena = implode($a);
				//Array temporal para guardar array resultante.
				$array_max = array();
				// Si la cadena no está vacía imprimirla para ver números.
				//if( count($a)!=0 )
				//	echo"<br>Cadena en funcion String = $strCadena" ;
				/* CREACIÓN PRÉVIA DE UNA MATRIZ PARA ALOJAR LAS POSIBLES
				   COMBINACIONES DE POSIBILIDADES EN LA CADENA.
				*/
				 $arr_res = array();
				 for($i=0;$i<20;$i++)
				    $arr_res[$i]=array();

         // En el caso de haber sólo un número.
				 if(count($a)==0)
				 {
					   // Si se pasa una matriz vacía...
					   return 0;

				 }else if(count($a)==1)
				 {
					  // Si sólo existe un número en la matriz...
					 	return 1;

				 }else if($a==fRevers($a))
				 {
						 // Si es una cadena con los mismos números.Devolverla enetera.
					//	 echo "La Misma!!!!!";
	           return count($a);

			   }else if(count($a)==2)
				 {
					   if($a[0]==$a[1])
						 {
							 	$r = array();
								$r[0]= $a[0];
								return 2;

						 }else if(!($a[0]==$a[1]) )
						 {
						   //Si array de 2 el y no son iguales,no hay espejo
					      return 1;//Espejo máximo es de 1 elemento.
						 }

         // Si hay 3 elementos y no es capycua,devolver falso.
			   }else if( count($a)==3 )
				 {

					   if( $a[1]==$a[0] || ($a[1]==$a[2]))
					 	   //Retorno el array en sí.
				       return 2;
						 else
						 	 return 1;
				 // Cualquier otro caso mirar bien.
			   }else if( count($a)==3 && $a[0]!=$a[2]  )

				 		 return 1;
			   else
				 { //  Cuando ya interviene una secuencia superior,gestionar.
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					  // Comenzamos con máximo igual a 2.
						$nivel_max = 2;
						$found = false;
						//Parte entera del numero.
					  $tab = floor(count($a)/2);
						$tab++;//Incremento el nº de tablas xq el caso de 1,2,3,2,1,1 no llegaba a la tabla del 5.
						$tab=$tab + ($tab%2);//Le sumo el resto para poder llegar a numeros más grandes.
						// Cada vuelta,cuantos elementos cojeré.

						//echo "Numero tablas = $tab";
		        for($n=2,$t=0;$t<$tab;$n++,$t++)
						{
              //echo" <br><br>CAMBIO DE TABLA. $strCadena ,Tabla= $t<br><br>";
							$repes = ($num_els-$n)+ 1;//Numero de secuencias.
							//echo "<br>Repes: ";
							//var_dump($repes);
							echo("<br>");
							$tablas = (int)$num_els/2;
							//$i=0
							for($i=0;$i<$repes;$i++)
						  {
								  for($c=0;$c<$n;$c++)
								  {
										//$s = $c+$i;
										$V = $c + $i;
										//echo "Indice: ";
										//var_dump($V);
								  	$val = $a [ $V ];
								  	$arr_res[$i][$c] = $val;
										//echo"Val = ".$arr_res[$i][$c]."<br/>";
									}

									$str=""; // Convertimos
									//echo "string = ".implode($arr_res[$i]);
		              //
									$reves = implode(fRevers($arr_res[$i]));
									//echo "<br>revers = ".$reves;
									//El implode me pasa array to string sin la coma.
									///$str=implode($temp);

									echo "<br>";
									if(strpos($strCadena,$reves)!==false)
									{
								       //	echo "Espejo localizado!!!!.Nivel ".count($arr_res[$i]	 ); //"<br>String = $str ,$strCadena";
												if(count($arr_res[$i])>=$nivel_max)
												{
														 // Guardo el num. maximo del espejo.
												     $nivel_max = count($arr_res[$i]);
														 // Guardo el array resultante como máxmo.
														 $array_max = $arr_res[$i];
														 $found=true;
												}
									}//else
											  //echo "Espejo no localizado!!!<br\>";

								echo"<br\><br\>";

							 }//end-for-repes.

						}//end-for-tablas.

						if($found)
						  return count($array_max);//fRevers//return fRevers($array_max);//fRevers
						else return 1;
 				 }//end-else.


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		}//end-function.
   // Muestra el array resultante.
    function fMostrar($a,$sep)
	  {
					for($i=0;$i<count($a);$i++)
					{
							echo "$a[$i]";
							if($i< count($a)-1 )
							      echo"$sep";

					}
		}



		//Recibe Array y devuelve otro array con orden invertido.;
    function fRevers($a){
					 // Trabajo con Array.
						$l=count($a);
						$resp[]=array();
						for($i=$l-1,$c=0;$i>=0;$i--,$c++){
							  $resp[$c]=$a[$i];
						}
					  return $resp;
		}

		// Dada cadena,inicio y cantidad,crea otro array con los elementos desde inicio, n cars.
		// DEVUELVE String.
		function fSubstr($a,$ini,$cant)
		{

				 // Numero total elementos array.
				 $tot_el=count($a);
				 // Obtenemos posición índice de la mitad.
			   $coc = (int)count($a)/2;
         $str="";
			   $swap = array();
				 for($i=$ini,$rps=0;($rps<$cant) && ($i<$tot_el);$i++,$rps++)
				 {
					 	//if( ($ini+$cant)<=count($a) )
					     	$swap[$i]=$a[$i];

				 }
				 // FUNCIONA BIEN!!!!!
				 //Convertimos Array to String junto con las comas....
				 //Si incluyo la comoa,me pasa a formar parte del array,sinó no.
				 $str=implode(",",$swap );
		     return $str;

				 ////////////////////////////////////////////////////////////////////////////
		}               // ESTOY EN ESTA FUNCIÓN..........
		// Dado array $a y $cant:
		/*Crear array con elementos de long. n.
		function fParejas($a,$cant){

          $iMax = (int)count($a)/2;//Obtengo nº de pares,trios,cuatrios....
					$resp[]=array();
					// Nos da el n de repeticiones o secuencias dentro de la cadena inicial.
					$reps=(count($a)-$cant) + 1;
					$pares = count($a)-$cant;
					echo "<center>Pares = $pares<br>";
					echo "cadena = ";
					for($i=0;)
							for($i=0;$i<$reps;$i++)
							{
								  $resp[$i]=$a[$i];
                  //echo $a[$i];
							}
							// Devuelvo cadena.
							return $resp;

				 }else {
							//Codigo error.
							$resp[0]="error";
							return $resp;

				}
				echo"</center>";

		}*/

?>
