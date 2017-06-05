<?php
    function validate_nom($texto){
        $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$texto);
    }           

    
     function validate_familia($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    function validate_mesures($mesures){
        $reg="/^[0-9]{2,3}[x]{1}[0-9]{2,3}$/";  ///////cambiar si no va
        return preg_match($reg,$mesures);
    }

    function validate_material($texto){
         if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    function validate_color($texto){
        $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$texto);
    }
    function validate_pes($texto){
        $reg="/[0-9]{2,3}$/";
        return preg_match($reg,$texto);
    }
        
    function validate_pais_fabric($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }    
    
    function validate_data_fabric($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_coment($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate(){
        $check=true;
        $error=array();
        

        $v_nom=$_POST['nom'];
        $v_familia=$_POST['familia'];
        $v_mesures=$_POST['mesures'];
        $v_material=$_POST['material'];
        $v_color=$_POST['color'];
        $v_pes=$_POST['pes'];
        $v_pais_fabric=$_POST['pais_fabric'];
        $v_data_fabric=$_POST['data_fabric'];
        $v_coment=$_POST['coment'];
       
        
        $r_nom=validate_nom($v_nom);
        $r_familia=validate_familia($v_familia);
        $r_mesures=validate_mesures($v_mesures);
        $r_material=validate_material($v_material);
        $r_color=validate_color($v_color);
        $r_pes=validate_pes($v_pes);
        $r_pais_fabric=validate_pais_fabric($v_pais_fabric);
        $r_data_fabric=validate_data_fabric($v_data_fabric);
        $r_coment=validate_coment($v_coment);
        
        if($r_nom !== 1){
            $error_nom = " * Has d'introduir el nom de l'article";
            $check=false;
        }else{
            $error_nom = "";
        }
        if(!$r_familia){
            $error_familia = " * Has de seleccionar una familia";
            $check=false;
        }else{
            $error_familia = "";
        }
        if($r_mesures !== 1){
            $error_mesures = " * Has d'introduir unes mesures vàlides (000x000)";
            $check=false;
        }else{
            $error_mesures = "";
        }
        if($r_material !== 1){
            $error_material = " * Has d'introduir el material de l'article";
            $check=false;
        }else{
            $error_material = "";
        }
        if($r_color !== 1){
            $error_color = " * Has d'introduir el color de l'article";
            $check=false;
        }else{
            $error_color = "";
        }
        if($r_pes !==1){
            $error_pes = " * Has d'introduir el pes de l'article";
            $check=false;
        }else{
            $error_pes = "";
        }
        if(!$r_pais_fabric){
            $error_pais_fabric = " * Has de seleccionar el pais de fabricació";
            $check=false;
        }else{
            $error_pais_fabric = "";
        }
        if(!$r_data_fabric){
            $error_data_fabric = " * Has de seleccionar la data de fabricació";
            $check=false;
        }else{
            $error_data_fabric = "";
        }
        if(!$r_coment !==1){
            $error_coment = " * Has d'introduir la descripció del article";
            $check=false;
        }else{
            $error_coment = "";
        }
        //`nom`, `familia`, `mesures`, `material`, `color`, `pes`, `pais_fabric`, `data_fabric`, `coment
        $error = array(
                            'nom' => $error_nom,
                            'familia' => $error_familia,
                            'mesures' => $error_mesures,
                            'material' => $error_material,
                            'color' => $error_color,
                            'pais_fabric' => $error_pais_fabric,
                            'data_fabric' => $error_data_fabric,
                            'coment' => $error_coment,
                           
                        );
        $resultado=array('resultado'=>$check , 'error'=>$error);
        return $resultado;

        //return $check;
    }