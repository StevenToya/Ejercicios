<?php 

if(isset($_POST["submit"]) && !empty ($_POST["direccion"])){

	$Direccion = $_POST["direccion"];
	$posicion=strpos($Direccion,"youtube");

	if($posicion > 0){

		$posicion1=strpos($Direccion,"v=");

		if($posicion1 >0 ){
			$ID=substr($Direccion,$posicion1+2,11);
		}else{
			echo "<h2>"."El ID del video es incorrecto"."</h2>";
		}
	}else{
		echo "<h2>"."Tu URL no es youtube"."</h2>";
	}

}



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
			background:black;
		}

		h2{
			color: white;
			margin: 5% 0 0 20%;
		}

		form{
			margin-left: 30%;
		}
		input{
			border-radius: 3px;
			width: 40%;
			padding: 10px;
			margin: 5% 0 0;
		}

		input[type="submit"]{
			width: 10%;
		}
		iframe{
			margin:10% 0 0 27%;
		}

		h2{
			color: white;
			margin-left: 30%;
		}
		label{
			color: white;
		}
	

	</style>

</head>
<body>



	<form method="POST">
		<label>INGRESA TU URL DE YOUTUBE</label>
		<br>
		<input type="text" name="direccion" required="required">
		<input type="Submit" name="submit">
	</form>



	<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $ID ?>" frameborder="0" allowfullscreen></iframe>
	<br>

</body>
</html>