<?php
	class connect{
		public static function con(){
			$host = getenv('127.0.0.1');  
    		$user = "root";                     
    		$pass = "";                             
    		$db = "articles";                      
    		$port = 3306;                           
    		$tabla="articles";
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}