<?php
    include("model/connect.php");
    
	class DAOUser{ 
        function insert_user($datos){
            $nom=$datos['nom'];
            $mesures=$datos['mesures'];
            $material=$datos['material'];
            $color=$datos['color'];
            $pes=$datos['pes'];
            $pais_fabric=$datos['pais_fabric'];
            $data_fabric=$datos['data_fabric'];
            $coment=$datos['observacions'];

        	$sql = " INSERT INTO articles (nom, familia, mesures, material, color, pes, pais_fabric, data_fabric, coment)"
                . " VALUES ('$nom', '$familia', '$mesures', '$material', '$color', '$pes', '$pais_fabric', '$data_fabric', '$coment')";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){
			$sql = "SELECT * FROM articles ORDER BY ref ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		
		function select_user($ref){
			$sql = "SELECT * FROM articles WHERE ref='$ref'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_user($datos){
			$user=$datos['usuario'];
        	$passwd=$datos['pass'];
        	$name=$datos['nombre'];
        	$dni=$datos['DNI'];
        	$sex=$datos['sexo'];
        	$birthdate=$datos['fecha_nacimiento'];
        	$age=$datos['edad'];
        	$country=$datos['pais'];
        	foreach ($datos['idioma'] as $indice) {
        	    $language="$indice";
        	}
        	$comment=$datos['observaciones'];
        	foreach ($datos['aficion'] as $indice) {
        	    $hobby="s$indice:";
        	}
        	
        	$sql = " UPDATE usuario SET pass='$passwd', name='$name', dni='$dni', sex='$sex', birthdate='$birthdate', age='$age',"
        		. " country='$country', language='$language', comment='$comment', hobby='$hobby' WHERE user='$user'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($ref){
			$sql = "DELETE FROM articles WHERE ref='$ref'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}