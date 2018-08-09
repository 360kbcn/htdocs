<?php 
require "model/functions.php";
require_once "vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class generarTituloParaUrlTest extends TestCase{
	
	public function testCaracters(){

		$a = ["à", "á", "?","!","ç","ñ","Ñ","Ç"];
		$string = "àá?1çÇñÑ";
		$result = generarTituloParaUrl($string);
		$this->assertAttributeNotContains($result, $a);
	}

}
?>