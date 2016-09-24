<?php session_start(); ?>



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

		h3 {
			margin:20% 0 0 40%;
			color: white
		}

		h6{
			margin:2% 0 0 43%;
			color: white
		}
		a{
			color:white;
		}
		div{

			margin:2% 0 0 90%;

		}
	</style>
</head>
<body>

	<div>
		<a href="ControladorSession.php?var=2" >Cerrar sesion

		</a>
	</div>

	<h3>Bienvenido <?php echo  $_SESSION["Nombre"] ?></h3>
	<h6>Tipo de sesion <?php  echo $_SESSION["TipoUsuario"] ?></h6>
	


</body>
</html>