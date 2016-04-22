<?php
//use operador;
include 'operador.php';
class operadorTest extends PHPunit_Framework_TestCase
{
  public function testCreaMars()
  {

    $X = 0;
    $Y = 0;
    $Z = 'E';
    $mar = new operador($X,$Y,$Z);

    $this->assertInstanceOf('operador',$mar);
    return $mar;
  }
  /**
  * @depends testCreaMars
  */
  public function testEntregaX($mar)
  {
    $X = $mar->entregaX();

/*  $this->assertNull($X);
*
*/

//  $this->assertLessThanOrEqual(5,$X);

  $this->assertInternalType("int",$X);


  }
}
