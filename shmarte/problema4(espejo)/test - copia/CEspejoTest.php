<?php
    require_once "Espejo.php";
		use PHPUnit\Framework\TestCase;// Indica donde está el TestCase
		class CEspejoTest extends TestCase{

         // Comprueba q s n l paso nada,retorna -2
         // pasa el test.
          public function testCadVacia(){

             $a=[];
             $r = fEspejo($a);
             $this->assertEquals(-2,$r);

          }
          // Comprueba q s n l paso 1 ele.,retorna -1
          // Si lo hace pasa prueba..
           public function testNoCoincidencia(){

              $a=[1,2,3];
              $r = fEspejo($a);
              $this->assertEquals(-1,$r);

           }
           // Comprueba q s n l paso 1 ele.,retorna -1
           // Si lo hace pasa prueba..
            public function testUnNumero(){

               $a=[1];
               $r = fEspejo($a);
               $this->assertEquals(-10,$r);

            }
            //Comprueba el buen func.de la función.
            public function testCorrecto1(){

               $a=[1,2,3,2,1];
               $true=[1,2,3,2,1];
               $r = fEspejo($a);
               $this->assertEquals($true,$r);

            }
            /*Comprueba el buen func.de la función.
              Igualmente,le paso tres números capycua,devuelve exactamente
              lo mismo.Aqui he querido probar numero de mas digitos.
            */
            public function testCorrecto2(){

               $a=[100,200,100];
               $true=[100,200,100];
               $r = fEspejo($a);
               $this->assertEquals($true,$r);

            }
            //Comprueba el buen func.de la función 3.
            //Cuando no halla, devuelve -1.
            //Pasa test..
            public function testCorrecto3(){

               $a=[1,2,3,4];
               $true=[1,2,1];
               $r = fEspejo($a);
               $this->assertEquals(-1,$r);

            }
            /* Test funcionamiento general 4.
            */
            public function testCorrecto4(){

               $a=[1,2,1];
               $true=[1,2,1];
               $r = fEspejo($a);
               $this->assertEquals($true,$r);

            }
            /* Test funcionamiento general CapyCua..
               Como la secuencia se repite en los dos sentidos,decimos que es
               un espejo.
            */
            public function testCapyCua(){

               $a=[1,1,1,1];
               $true=[1,1,1,1];
               $r = fEspejo($a);
               $this->assertEquals($true,$r);

            }
            /* Test funcionamiento general 5.
            */
            public function testCorrecto5(){

               $a=[1,2,3,3,2,1];;
               $true=[1,2,3,3,2,1];
               $r = fEspejo($a);
               $this->assertEquals($true,$r);

            }
            /* Test funcionamiento general 6.
            */
            public function testCorrecto6(){

               $a=[1,2,3,2,3,4,2,3,2,1];;
               $true=[1,2,3,2,];
               $r = fEspejo($a);
               $this->assertEquals($true,$r);

            }
            /* Test funcionamiento general 6.
               Funcionamiento general con numero mayores.
               Pasa test.
            */
            public function testCorrecto7(){

               $a=[22,54,88,1,2,88,54,22];
               $true=[22,54,88];
               $r = fEspejo($a);
               $this->assertEquals($true,$r);

            }

    }

?>
