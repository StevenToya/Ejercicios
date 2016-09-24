<?php 


class Login 
{

	public $Admin="Steven@misena.edu";
	public $usuario="dada@misena.edu";
	private $clave=12345678;
	private $clave2=1111111;
	public $Nombre="";
	public $TipoUsuario="";	


	public function encriptar($entrada)
	{
		return password_hash($entrada, PASSWORD_BCRYPT);

	}

	public function validar($correo,$contrasena)
	{

		$fila1 =["Nombre" => $this->usuario,"Contrasena" =>$this->encriptar($this->clave),"TipoUser" => "1"];
		$fila2 =["Nombre" => $this->Admin,"Contrasena" =>$this->encriptar($this->clave2),"TipoUser" => "2"];


		$multidimensional=[$fila1,$fila2];


		foreach ($multidimensional as $value)
		{
			if(($correo == $value["Nombre"]) && password_verify($contrasena, $value["Contrasena"]))
			{

				$this->Nombre = $value["Nombre"];
				$this->TipoUsuario = $value["TipoUser"];
				return true;

				break;

			}else
			{

			}

			
		}
	}



	public function CerrarSesion(){

		return true;
	}


}




?>