<?php


$nombres =array( "María" , "Camilo" , "Julio" , "Ana" , "Pedro");
$nota1 = array(5, 4 , 3.5 , 4.1 , 2.6);
$nota2 =array(3.5, 3.8, 3.8, 2.5, 4);

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
			<th>Nota_2</th>
			<th>Necesita</th>
		</tr>

		<?php
		
		for ($i=0; $i <5 ; $i++) { 

			$suma=3-(($nota1[$i]*0.3)+($nota2[$i]*0.3));
			$definitiva=($suma*100)/40 ; 		

			?>
			<tr>  
				<td><?php echo $nombres[$i] ?></td>
				<td><?php echo $nota1[$i]?></td>
				<td><?php echo $nota2[$i]?></td>
				<td><?php echo $definitiva?></td>
				
				<?php
			}
			?>
		</tr>



	</table>
</body>
</html>


