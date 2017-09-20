<?php
		// Son todos negativos?
		/**
    * Libreria de funciones matemáticas.
    *
    * @author Oscar  <oscarmoran1978@hotmail.com>
    * @license GPL
    */
    // Define un ambito.Pueden haber dif.funciones con mismo nombre en dif. ambitos.
    namespace ejemplo\Maximo;
		/**
		* Función que dado un array pasado por valor,hallar el máximo y devolverlo.
		* @param int $a Array de números pasado como parámetro.
	  *
	  * @return int Devuelve como resultado el mayor de todos los números del array.
	  */


		function maximo($a){

				//$a = [1,200,23,1000];
				$max=$a[0];
				for($i=1;$i<count($a);$i++)
				{
								if($a[$i]>$max)
									$max=$a[$i];
				}
				return $max;

	    }
?>
