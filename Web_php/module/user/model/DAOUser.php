<?php
    include("model/connect.php");
    
	class DAOUser{ 
        function insert_user($datos){
            $nom=$datos['nom'];
            $familia=$datos['familia'];
            $mesures=$datos['mesures'];
            $material=$datos['material'];
            $color=$datos['color'];
            $pes=$datos['pes'];
            $pais_fabric=$datos['pais_fabric'];
            $data_fabric=$datos['data_fabric'];
            $descripcio=$datos['descripcio'];

        	$sql = " INSERT INTO articles (nom, familia, mesures, material, color, pes, pais_fabric, data_fabric, descripcio)"
                . " VALUES ('$nom', '$familia', '$mesures', '$material', '$color', '$pes', '$pais_fabric', '$data_fabric', '$descripcio')";
            
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

            $nom=$datos['nom'];
            $familia=$datos['familia'];
            $mesures=$datos['mesures'];
            //$material=$datos['material'];
            foreach ($datos['material'] as $indice) {
                $material="$indice:";
            }
            $color=$datos['color'];
            $pes=$datos['pes'];
            $pais_fabric=$datos['pais_fabric'];
            $data_fabric=$datos['data_fabric'];
            $descripcio=$datos['descripcio'];
        	

        	$sql = "UPDATE articles SET nom='$nom', familia='$familia', mesures='$mesures', material='$material', color='$color'," 
            . " pes='$pes',pais_fabric='$pais_fabric',data_fabric='$data_fabric',descripcio='$descripcio' WHERE nom='$nom'";
        		
            
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