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
			margin: 10% 0 5% 10%;
		}
		label{
			display: block; 
			padding: 5px;
			color: white;
			text-align: center;
		}

		input{
			border-radius: 5px;
			padding: 10px;
			margin:5% 0 5% ;
		}
		h3{
			margin:5% 0 0 25%;
			color: white;
		}
		div{
			margin: 15% 0 0 35%;
			background: gray;
			width: 30%;
		}
		input[type="submit"]{
			margin-left: 46%;
			margin-top: 1%;
		}
	</style>


</head>
<body>

	<h3>CONSULTA EL AREA Y EL PERIMETRO DE TU FIGURA GEOMETRICA</h3>

	<div>
		<form name="formulario" action="Controlador.php" method="POST">
			<label >Ingresa la longitud del lado </label>

			<input type="text" name="Lado">
			<select name="figura">
				<option value="1">Triangulo</option>
				<option value="2">Cuadrado</option>

			</select>
			<br>
		</div>
		<input type="submit" value="Consultar">

	</form>



<script type="text/javascript">

window.onload = function () {
document.formulario.Lado.focus();
document.formulario.addEventListener('submit', validarFormulario);
}
 
function validarFormulario(evObject) {
evObject.preventDefault();
var todoCorrecto = true;
var formulario = document.formulario;
if (isNaN(formulario.Lado.value)==true || /^[1-9]\d$/.test(formulario.Lado.value)==false )
 {alert ('Longitud no valida'); todoCorrecto=false;}

if (todoCorrecto ==true) {formulario.submit();}
}
</script>

</body>
</html>

