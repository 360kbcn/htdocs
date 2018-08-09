<?php


require_once "funciones.php";

use PHPUnit\Framework\TestCase;

class Testeador extends TestCase{

 public function testValorMaximo(){

   // Valor Maximo entre negativos y positivos

   $strArray=[3,4,-6,1,65,-3,6,-10,1024];

   $resultado =  ValorMaximo($strArray);
   $this->assertEquals(1024, $resultado);

 }

 public function testValorMaximoDecimales(){

   // Valor Maximo entre negativos y positivos

   $strArray=[3,4,-6,1,65,-3,6.6,-10,1024,1024.1];

   $resultado =  ValorMaximo($strArray);
   $this->assertEquals(1024.1, $resultado);

 }



 public function testValorMaximoTodosNegativos(){

   // Valor Maximo entre negativos

   $strArray=[-2,-55,-43,-4];

   $resultado =  ValorMaximo($strArray);
   // $resultado =  ValorMaximo($strArray);
   $this->assertEquals(-2, $resultado);

 }


 public function testValorMaximoes0(){

   // Valor Maximo entre Positivos

   $strArray=[-333,-55,-43,-404,0];
   $resultado = ValorMaximo($strArray);
   $this->assertEquals(0, $resultado);

 }


 public function testValorMinimoPositivosyNegativos(){

   // Valor Maximo entre negativos y positivos

   $strArray=[3,4,-6,1,65,-7,6,-10];

   $resultado =  ValorMinimo($strArray);
   $this->assertEquals(-10, $resultado);

 }


 public function testValorMinimoTodosNegativos(){

   // Valor Maximo entre negativos

   $strArray=[-3,-55,-43,-4];

   $resultado =  ValorMinimo($strArray);
   $this->assertEquals(-55, $resultado);

 }

 public function testValorMinimoTodosNegativosDecimales(){

   // Valor Maximo entre negativos

   $strArray=[-3.2,-55.2,-43.4,-55.3];

   $resultado =  ValorMinimo($strArray);
   $this->assertEquals(-55.3, $resultado);

 }


 public function testValorMinimoTodospositivos(){

   // Valor Maximo entre negativos

   $strArray=[12,25,83,73,125];

   $resultado =  ValorMinimo($strArray);
   $this->assertEquals(12, $resultado);

 }

 public function testValorMinimoTodospositivoscon0(){

   // Valor Maximo entre negativos

   $strArray=[12,25,83,0,73,125];

   $resultado =  ValorMinimo($strArray);
   $this->assertEquals(0, $resultado);

 }

 public function testsecuenciaenmedio(){

   // Secuencia Correcta

   $cadena = 'cms<->dkd';
   $resultado=token($cadena);
   $this->assertTrue($resultado);
 }


 public function testMedioaproxunodch(){

   // Secuencia con un desplazamiento a la derecha

   $cadena = "cmsd<->dkt";
   $resultado=token($cadena);
   $this->asserttrue($resultado);
 }


 public function testMedioaproxunoizq(){

   //Secuencia con un desplazamiento a la izq

   $cadena = "cms<->zdkt";
   $resultado=token($cadena);
   $this->asserttrue($resultado);
 }

 public function testfaltaunodeloselementos(){

   //Falta uno dde los elementos


   $cadena = "cms<-dkt";
   $resultado=token($cadena);
   $this->assertfalse($resultado);
 }

 public function lacadenaexisalpricipioyenmedio(){

    // Con una cedena al pricipio

   $cadena = "<->pcms<->dskt>-d";
   $resultado=token($cadena);
   $this->asserttrue($resultado);
 }


 public function testsinguion(){

   //Sin no existe el guion

   $cadena = "cms<>dkd";
   $resultado=token($cadena);
   $this->assertfalse($resultado);
 }


 public function testsinelemntos(){

   //Si no existe ninguno de los elementos

   $cadena = "cmsdkd";
   $resultado=token($cadena);
   $this->assertfalse($resultado);
 }

 public function testsologuion(){


   //Si solo esta el guion

   $cadena = "cms-dkd";
   $resultado=token($cadena);
   $this->assertfalse($resultado);
 }

 public function testmayorquemenorquecambiados(){
   $cadena = "cms>-<dkd";
   $resultado=token($cadena);
   $this->assertfalse($resultado);
 }

}
?>
