


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
			margin: 0 0 5% 20%;
		}
		label{
			display: block; 
			margin-top: 5%;
		}

		input{
			border-radius: 5px;
			padding: 10px;
			margin:5% 0 5% ;
		}
	</style>
</head>

<body>
	

	<div>
		<form action="ControladorSession.php?var=1" method="POST">

			<label>Usuario</label>
			<input type="text" name="Usuario" required="requerid">

			<label>Contraseña</label>
			<input type="password" name="Contra" required="requerid">

			<input type="submit" name="enviar" value="Enviar">
		</form>
	</div>

<?php  if(@$_GET["var"] == 3){
echo "<script>
alert('Nombre y usuario incorrecto');
</script>";
}
?>

</body>
</html>
