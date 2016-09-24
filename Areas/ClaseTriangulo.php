
<?php 
require_once("ClaseAbstracta.php"); 


class Triangulo extends ClasePrincipal
{

	
	
	function calcularArea($lados){

		$suma=$lados*$lados;
		echo "el area del triangulo es ".$suma."<br>";

	}

	function calcularPerimetro($lados){

		$suma=$lados*$lados*$lados;
		echo "el Perimetro del triangulo es".$suma;

	}


	




}


?>