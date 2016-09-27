

<?php 

require_once("ClaseAbstracta.php"); 

class Cuadrado extends ClasePrincipal
{



	function calcularArea($lados){
		$area = pow($lados,2);
		return $area;
	}


	function calcularPerimetro($lados){
		$peri= $lados * 4;
		return $peri;
	}
	
}


?>