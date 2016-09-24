

<?php 

require_once("ClaseAbstracta.php"); 

class Cuadrado extends ClasePrincipal
{



	function calcularArea($lados){
     $suma = pow ($lados,2);
     echo "El area del cuadrado es: ".$suma."<br>";
	}


	function calcularPerimetro($lados){
		$peri= $lados * 4;
		echo "El perimetro del cuadrado es: ".$peri;

	}
	
}


 ?>