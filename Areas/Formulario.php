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

		div{
			margin: 20% 0 0  30%;
			background:#f4f4f4;
			background:rgba(244,244,144,.49);
			width: 30%;
			border-radius: 5px;


		}
		form{
			margin: 20% 0 5% 40%;
		}
		label{
			display: block; 
			margin-top: 5%;
			color: white;
		}

		input{
			border-radius: 5px;
			padding: 10px;
			margin:5% 0 5% ;
		}
	</style>

</head>
<body>

<form action="Controlador.php" method="POST">
	<label>Elija la figura a consultar "Triangulo=1 Cuadrado=2"</label>
	
	<input type="number" name="figura">
	<label >Ingresa la longitud del lado de tu figura</label>
	<input type="number" name="Lado">

	<input type="submit" value="Enviar">

</form>

</body>
</html>