<?php 

$lado=$_POST["Lado"];
$opcion=$_POST["figura"];




if($opcion ==1)
{
	require_once("clases/ClaseTriangulo.php");
	
	$obj=new Triangulo;
	$obj->setLado($lado);

	// echo $obj->getLado();

	$Area=$obj ->calcularArea();
	$Perimetro=$obj->calcularPerimetro();

	echo "El area del triangulo es: ".$Area."<br>";
	echo "El perimetro del triangulo es: ".$Perimetro;
}

elseif($opcion==2){

	require_once("clases/ClaseCuadrado.php");

	$obj = new Cuadrado;
	$obj->setLado($lado);

	$Area = $obj->calcularArea();
	$Perimetro=$obj->calcularPerimetro();

	echo "El area del cuadrado es: ".$Area."<br>";
	echo "El perimetro del cuadrado es: ".$Perimetro;
}




?>