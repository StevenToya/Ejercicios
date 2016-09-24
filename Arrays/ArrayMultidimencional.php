


<?php


$proPeso=(63+65+56+54)/4;
$proEstatura=(1.72+1.68+1.56+1.65)/4;
$proEdad=(19+19+18+19)/4;



$fila1=["Juan","Perez","63","1,72","19"];
$fila2=["Pedro","Gomez","65","1,68","19"];
$fila3=["Maria","Diaz","56","1,56","18"];
$fila4=["Ana","Jaramillo","54","1,65","19"];
$fila5=["Promedio","",$proPeso,$proEstatura,$proEdad];





$matriz = [$fila1,$fila2,$fila3,$fila4,$fila5];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>

		body{

			background: black;
		}
		table{
			margin: 20% 0 0 30%;
			background: white;
			width: 40%;
			border-radius: 5px;
		}

		tr:nth-child(even){

			background:gray;
		}
		tr:nth-child(6){
			background: blue;
			background:rgba(100,200,200,.79); 
			

		}
		th{
			background: black;
			color: white;
		}


	</style>

</head>
<body>


	<table>

		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Peso</th>
			<th>Estatura</th>
			<th>Edad</th>

		</tr>
		<?php 

		$altura=count($matriz);


		for ($i=0; $i <$altura; $i++) { 
			echo "<tr>";

			$ancho = count($matriz[$i]);

			for ($j=0; $j <$ancho ; $j++) { 
				echo "<td>".$matriz[$i][$j]."</td>";
			}

			echo "</tr>";
		} ?>


	</table> 
</body>

</html>


