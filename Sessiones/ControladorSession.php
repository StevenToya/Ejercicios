
<?php 

$miusuario="Steven";
$miclave=0000;


if($_GET["var"] == 1){

	if(isset($_POST["enviar"])){


		$usuario = $_POST["Usuario"];
		$contrasena = $_POST["Contra"];



		if(($usuario == $miusuario) && ($contrasena == $miclave)){


			session_start();

			$_SESSION["Nombre"] = $usuario;
			$_SESSION["TipoUsuario"] = 1;

			header("Location:Bienvenido.php");

		}else{
			
			header("Location:Sesion.php?var=3"); 

		}
	}
}

if($_GET["var"] == 2){

	session_start();
	session_unset();
	session_destroy();
	header("Location:Sesion.php");

}





?>

