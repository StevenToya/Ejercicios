<?php


$fecha=date('m');

if($fecha < 6){

	echo "Tu mes se encuentra en el semestre 1";

	if($fecha == 6){
		echo "Estas en vacaciones de JUNIO";
	}
	
}else{

	echo "Tu mes se encuentra en el semestre 2".'<br>';

	}if ($fecha == 12) {
		echo "Y stas en vacaciones de DICIEMBRE";
	}




?>