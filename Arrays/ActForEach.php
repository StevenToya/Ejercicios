
<?php

$Asociativo = array(
	'María' => 5 , 
	'Camilo'=> 4 ,
	'Julio' => 3.5 ,
	'Ana' => 4.1 , 
	'Pedro' => 2.6);


	?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">

		<style type="text/css" >

			body{

				background: black;
			}

			tr:nth-child(even){

				background: gray;
			}

			table{
				width: 30%;
				border-radius: 5px;
				margin: 20% 0 0 30%;
				background: white;
			}
			td{
				text-align: center;
			}


		</style>
	</head>
	<body>
		<table >
			<tr>
				<th>Nombres</th>
				<th>Nota_1</th>
				
			</tr>
			<?php foreach ($Asociativo as $indice => $valor) { ?>
				<tr>  
					<td><?php 	echo $indice?></td>
					<td><?php 	echo $valor?></td>

					<?php } ?>
			</tr>


		</table>
	</body>
	</html>

