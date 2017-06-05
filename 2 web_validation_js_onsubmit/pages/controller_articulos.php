<?php
	include("utils/functions.inc.php"); 
	include("classes/Browser.class.php");

	if (isset($_POST['Submit'])) { //(ref, nombre, tipo, color, medidas, peso, material, fecha_fabricacion, fecha_alta)"
		$result = validate_art();
		//debug($result);
		if ($result['resultado']) {
			$arrArgument = array(
							'ref' => strtoupper($result['datos']['ref']),
							'nombre' => $result['datos']['nombre'],
							'tipo' => $result['datos']['tipo'],
							'color' => strtoupper($result['datos']['color']),
							'medidas' => strtoupper($result['datos']['medidas']),
							'peso' => strtoupper($result['datos']['peso']),
							'material' => strtoupper($result['datos']['material']),
							'fecha_fabricacion' => strtoupper($result['datos']['fecha_fabricacion'])
							//'fecha_alta' => strtoupper($result['datos']['fecha_alta'])
						);
			//debug($arrArgument);
			$mensaje="Su registro se ha efectuado correctamente";
            
			//redirigir a otra p�gina con los datos de $arrArgument y $mensaje
			$_SESSION['art']=$arrArgument;
			$_SESSION['msje']=$mensaje;
			//header("Location:index.php?page=results_user1");
			$callback="index.php?page=results_art1";
			Browser::redirect($callback);
			die;
			
			//En el caso de enviar al usuario un correo y finalizar la aplicaci�n
			//include "results_user.php";
            //die;
		}else{
			$error = $result['error'];
			//debug($error);
		}
	}
	include 'form_art.php';
