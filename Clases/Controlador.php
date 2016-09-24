
<?php 

require_once("Clase.php");
$datos =new Login;


$correo = $_POST["Usuario"];
$contrasena = $_POST["Contra"];



if($_GET["var"] == 1){

	if(isset($_POST["enviar"])){


		$respuesta = $datos->validar($correo,$contrasena);


		if ($respuesta == true) {

			session_start();

			$_SESSION["Nombre"] = $datos->Nombre;
			$_SESSION["TipoUser"] = $datos->TipoUsuario;

			header("Location:Bienvenido.php");	
		}else
		{
			header("Location:formulario.php?var=3"); 

		}

	}
}



if($_GET["var"] == 2){


	$respuesta2 = $datos->CerrarSesion();


	if($respuesta2 == true){

		session_start();
		session_unset();
		session_destroy();
		header("Location:formulario.php");

	}
}
?>


