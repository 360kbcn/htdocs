<?php
require_once "funciones.php";

use PHPUnit\Framework\TestCase;

class todosNegativostest extends TestCase{

  public function testTodosNegativos(){

    $a=[-3,-55,-12,-78,-575];

    $res = todosNegativos($a);
    $this->assertTrue($res);


  }

  public function testnoTodosNegativos(){

  $a=[-3,-55,-12,-78,-575];
  $res = todosNegativos($a);
  $this->assertFalse($res);

}


public function testNegativosInicio(){

$a=[-3,55,43,-4];
$res = todosNegativos($a);
$this->assertFalse($res);

}

public function testNegativofinal(){

$a=[55,-3,-18,-9,44];
$res = todosNegativos($a);
$this->assertFalse($res);

}

public function testPositivoalInicio(){

$a=[55,-3,-18,-9,44];
$res = todosNegativos($a);
$this->assertTrue($res);

}

public function testPositivoalFinal(){

$a=[55,-3,-18,-9,-44];
$res = todosNegativos($a);
$this->assertFalse($res);

}

}
 ?>
