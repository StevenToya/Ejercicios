<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="jquey.min.js">

	<title></title>

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


	<script>


		function validar() {


			var correo = document.forms["formulario"]["Usuario"].value;
			var contrasena = document.forms["formulario"]["Contra"].value;


			var arrobas = correo.indexOf("@");
			var puntos = correo.lastIndexOf(".");
			var alertaGeneral="Errores del formulario: \n";
			var a=0;


			if (arrobas<1 || puntos<arrobas+2 || puntos+2>=correo.length) {
				alertaGeneral+="Tu correo no es valido \n";
				a=1;


			}
			if (contrasena.length < 6 ){

				alertaGeneral+="Tu contraseña es demasiada corta \n";
				a+=1;

			}

			if(a > 0){
				alert(alertaGeneral);

				return false;
			}

			return true;

		}


	</script>


</head>

<body>
	

	<div>
		<form name="formulario" action="Controlador.php?var=1" method="POST">

			<label>Usuario</label>
			<input type="text" name="Usuario">

			<label>Contraseña</label>
			<input type="password" name="Contra">

			<input type="submit" name="enviar" value="Enviar" onclick="return validar()">
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