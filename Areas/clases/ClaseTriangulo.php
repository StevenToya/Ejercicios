
<?php 
require_once("ClaseAbstracta.php"); 

class Triangulo
{

	

	public function setLado($L)
	{
		$this->lado = $L;
	}

	  // public function getLado()
   //  {
   //      return $this->lado;
   //  }

	function calcularArea(){

		$peri=$this->lado*3;
		return $peri;

	}

	// function calcularPerimetro(){

	// 	$peri=$this->lado*2;
	// 	return $peri;

	// }

}



?>