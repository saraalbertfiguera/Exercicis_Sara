<?php
    include ("module/user/model/DAOUser.php");
    //session_start();
    
    switch($_GET['op']){
        case 'list';
            try{
                $daouser = new DAOUser();
                $rdo = $daouser->select_all_user();

            }catch (Exception $e){

                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
             
            if(!$rdo){

                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/user/view/list_user.php");
            }
            break;
            
        case 'create';
            include("module/user/model/validate.php");
            
            $check = true;
            $error = array(
                            'nom' => '',
                            'familia' => '',
                            'mesures' => '',
                            'material' => '',
                            'color' => '',
                            'pes' => '',
                            'pais_fabric' => '',
                            'data_fabric' =>'',
                            'descripcio' => ''
                    );
            if (isset($_POST['create'])){
                $result=validate();
                //if ($check){
                if ($result['resultado']) {
                    $_SESSION['articles']=$_POST;
                    try{
                        $daouser = new DAOUser();
                        $rdo = $daouser->insert_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
                    if($rdo){
                        echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
                        $callback = 'index.php?page=controller_user&op=list';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }else{
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                }
                else {
                    $error = $result['error'];
                }
            }
            include("module/user/view/create_user.php");
            break;
            
        case 'update';
            include("module/user/model/validate.php");
            
            $check = true;
            $error = array(
                            'nom' => '',
                            'familia' => '',
                            'mesures' => '',
                            'material' => '',
                            'color' => '',
                            'pes' => '',
                            'pais_fabric' => '',
                            'data_fabric' =>'',
                            'descripcio' => ''
                    );
            if (isset($_POST['update'])){
                $result=validate();
                //if ($check){
                if ($result['resultado']) {
                    $_SESSION['articles']=$_POST;
                    try{
                        $daouser = new DAOUser();
                        $rdo = $daouser->update_user($_POST);
                    }catch (Exception $e){

                    
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
                    if($rdo){
                        echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
                        $callback = 'index.php?page=controller_user&op=list';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }else{
                      
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                }
                else {
                     
                    $error = $result['error'];
                    $_SESSION['articles']=$_POST;
                    $_GET['id']=$_POST['nom'];
                }
            }


            
            try{
                $daouser = new DAOUser();
                print_r($_GET['id']);
                $rdo = $daouser->select_user($_GET['id']);
                $articles=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{

                $id=$_GET['id'];
                include("module/user/view/update_user.php");
            }
            break;
            
        case 'read';
            try{
                $daouser = new DAOUser();
                $rdo = $daouser->select_user($_GET['id']);
                $articles=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }else{
                include("module/user/view/read_user.php");
            }
            break;
            
        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daouser = new DAOUser();
                    $rdo = $daouser->delete_user($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if($rdo){
                    echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
                    $callback = 'index.php?page=controller_user&op=list';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
            }
            
            include("module/user/view/delete_user.php");
            break;
        default;
            include("view/inc/error404.php");
            break;
    }