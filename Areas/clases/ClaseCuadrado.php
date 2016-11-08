

<?php 

require_once("ClaseAbstracta.php"); 

class Cuadrado extends ClasePrincipal
{

	public function setLado($L)
	{
		$this->lado = $L;
	}


	function calcularArea(){
		$area = pow($this->lado ,2);
		return $area;
	}


	function calcularPerimetro(){
		$peri= $this->lado * 4;
		return $peri;
	}
	
}
 /**
 * 
 */
 class ClassName extends AnotherClass
 {
 	
 	
 }

?>