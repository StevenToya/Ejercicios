<?php 

$lado=$_POST["Lado"];
$opcion=$_POST["figura"];

switch ($opcion) {

	case 1:
	require_once("ClaseTriangulo.php");
	
	$obj=new Triangulo;

	$resultado=$obj ->calcularArea($lado);
	$resultado1=$obj ->calcularPerimetro($lado);

	echo $resultado;
	echo $resultado1;

	break;

	case 2:
	require_once("Clasecuadrado.php");
	$obj = new Cuadrado;
	$resultado = $obj->calcularArea($lado);
	$resultado1=$obj->calcularPerimetro($lado);

	echo $resultado;
	echo $resultado1;
	break;

}



?>