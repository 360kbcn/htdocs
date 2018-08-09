<?php
    require_once "Espejo.php";
		use PHPUnit\Framework\TestCase;// Indica donde está el TestCase
		class CEspejo extends TestCase{

              // Comprueba si son todos  negativos.
          public function testNumeros(){

             $a=[3,-55,-12,-78,-567];
             $res = fEspejo($a);
             $this->assertFalse($res);

          }

    }

?>
