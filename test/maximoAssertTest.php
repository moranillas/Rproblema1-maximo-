<?php
    namespace ejemplo\Maximo;
    /**
    * Función para hallar el Máximo de un array.
    *
    * @author Oscar  <oscarmoran1978@hotmail.com>
    * @license GPL
    */
    require_once "maximo.php";
		use PHPUnit\Framework\TestCase;// Indica donde está el TestCase
		class maximoAssertTest extends TestCase{
          // TODO Faltan acabar muchas cosas en esta clase.
          // Comprueba si son todos  negativos.
          public function testMaximo(){

             $a=[3,-55,-12,-78,-567];
             $res = maximo($a);
             $this->assertEquals(3,$res);

          }
          public function testTodosNegativos(){

             $a=[-3,-55,-12,-78,-567];
             $res = maximo($a);
             $this->assertEquals(-3,$res);

          }
          public function testTodosPositivos(){

             $a=[3,55,12,78,567];
             $res = maximo($a);
             $this->assertEquals(567,$res);

          }


    }



?>
