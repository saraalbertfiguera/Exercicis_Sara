<?php
    include("model/connect.php");
    
    class DAOUser{ 
        function insert_user($datos){
            $nom=$datos['nom'];
            foreach ($datos['familia'] as $indice) {
                $familia="$indice";
            }
            $mesures=$datos['mesures'];
            $material=$datos['material'];
            $color=$datos['color'];
            $pes=$datos['pes'];
            foreach ($datos['pais_fabric'] as $indice) {
                $pais_fabric="$indice";
            }
            foreach ($datos['data_fabric'] as $indice) {
                $data_fabric="$indice";
            }
            $coment=$datos['observacions']; 
            

            $sql = " INSERT INTO usuario (nom, familia, mesures, material, color, pes, pais_fabric, data_fabric, coment)"
                . " VALUES ('$nom', '$familia', '$mesures', '$material', '$color', '$pes', '$pais_fabric', '$data_fabric', '$coment')";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
        
        function select_all_art(){
            $sql = "SELECT * FROM articles ORDER BY ref ASC";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
        
        function select_art($article){
            $sql = "SELECT * FROM articles WHERE ref='$article'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
        }
        
        function update_art($datos){
            $nom=$datos['nom'];
            foreach ($datos['familia'] as $indice) {
                $familia="$indice";
            }
            $mesures=$datos['mesures'];
            $material=$datos['material'];
            $color=$datos['color'];
            $pes=$datos['pes'];
            foreach ($datos['pais_fabric'] as $indice) {
                $pais_fabric="$indice";
            }
            foreach ($datos['data_fabric'] as $indice) {
                $data_fabric="$indice";
            }
            $coment=$datos['observacions'];
            
            //`nom`, `familia`, `mesures`, `material`, `color`, `pes`, `pais_fabric`, `data_fabric`, `coment
            $sql = " UPDATE articles SET nom='$nom', familia='$familia', material='$material', color='$color', pes='$pes', pais_fabric='$pais_fabric',"
                . " data_fabric='$data_fabric', coment='$coment' WHERE ref='$ref'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
        
        function delete_art($article){
            $sql = "DELETE FROM articles WHERE ref='$article'"; 
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
    }