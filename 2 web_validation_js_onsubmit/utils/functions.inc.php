<?php
	function validate_art(){
		$error=''; 
		$filtro = array(

			'ref' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\d{3,10}$/')
			),

			'nombre' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{4,20}$/')
			),
			
			'tipo' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
			
			'color' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{4,30}$/')
			),

			'medidas' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{2,10}$/')
			),

			'peso' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{4,120}$/')
			),

			'material' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{4,120}$/')
			),
			
			'fecha_fabricacion' => array(
				'filter' => FILTER_VALIDATE_REGEXP,
				'options' => array('regexp' => '/\d{2}.\d{2}.\d{4}$/')
			)
		);//(ref, nombre, tipo, color, medidas, peso, material, fecha_fabricacion, fecha_alta)"
		
		$resultado=filter_input_array(INPUT_POST,$filtro);
		if(!$resultado['ref']){
			$error='La referencia debe introducirse con caracteres numéricos de 3 a 10';
		}elseif(!$resultado['nombre']){
			$error='El nombre debe tener de 2 a 20 caracteres';
		}elseif(!$resultado['tipo']){
			$error='Debe seleccionar un tipo de artículo';
		}elseif(!$resultado['color']){
			$error='El campo color debe contener de 4 a 30 caracteres';
		}elseif(!$resultado['medidas'] || $resultado['password']!=$_POST['password2'] ){
			$error='Password debe tener de 6 a 12 caracteres y las dos contrasenyas deben ser iguales';
		}elseif(!$resultado['peso']){
			$error='Apellidos debe tener de 4 a 120 caracteres';
		}elseif(!$resultado['material']){
			$error='Debe seleccionar al menos un material';		
		}elseif(!$resultado['fecha_fabricacion']){
			$error='El formato de la fecha debe ser dd/mm/yy';	
		}else{
			 return $return=array('resultado'=>true,'error'=>$error,'datos'=>$resultado);
		};
		return $return=array('resultado'=>false , 'error'=>$error,'datos'=>$resultado);
	};

	function validatemail($email){
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				if(filter_var($email, FILTER_VALIDATE_REGEXP, array('options' => array('regexp'=> '/^.{5,50}$/')))){
					return $email;
				}
			}
			return false;
	}
	
	function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
	}
?>
