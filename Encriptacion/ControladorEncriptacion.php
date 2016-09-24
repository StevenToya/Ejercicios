
<?php 



$Admin="Steven@misena.edu";
$usuario="dada@misena.edu";

$clave=12345678;
$clave2=6666666;

$encriptacion= password_hash($clave, PASSWORD_BCRYPT);
$encriptacion2= password_hash($clave2, PASSWORD_BCRYPT);

echo $encriptacion2;

$fila1 =["Nombre" => $Admin ,"Contrasena"=> $encriptacion,"TipoUser" => "1"];
$fila2=	["Nombre" => $usuario,"Contrasena" => $encriptacion2,"TipoUser" => "2"];



$multidimensional=[$fila1,$fila2];


if($_GET["var"] == 1){

	if(isset($_POST["enviar"])){


		$correo = $_POST["Usuario"];
		$contrasena = $_POST["Contra"];

		
		foreach ($multidimensional as $value)
		{
			if(($correo == $value["Nombre"]) && password_verify($contrasena, $value["Contrasena"]))
			{


				session_start();

				$_SESSION["Nombre"] = $value["Nombre"];
				$_SESSION["TipoUsuario"] = $value["TipoUser"];

				header("Location:InicioEncriptacion.php");
				break;

			}
			else
			{

				header("Location:FormularioEncriptacion.php?var=3"); 

			}
		}
	}


}





?>