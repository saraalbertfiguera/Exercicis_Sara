<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
		  <!--.aviso { color: #ff0000; font-family: arial; font-size: 10pt; fontstyle:italic }-->
	</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Demos datepicker</title>
	<style>
		label {
			width:120px;
			float:left;
		}

		#result {
			font-weight:bold;
			color:#FF0000;
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript">
	$(function() {
		$('#demo1').datepicker({
			dateFormat: 'dd/mm/yy', 
			changeMonth: true, 
			changeYear: true, 
			yearRange: '-80:+0'
			
		
		});
		
		
	});
	</script>

</head>
<body>



<?php
	function recoge($var){ 
		$tmp = (isset($_REQUEST[$var])) ? strip_tags(trim(htmlspecialchars($_REQUEST[$var]))) : '';
		if (get_magic_quotes_gpc()) 
			$tmp = stripslashes($tmp);
		return $tmp;
	}

	if (isset($_POST['enviar'])){
		$nombre = $_POST['nombre'];
		$edad   = $_POST['edad'];
		$email = $_POST['email'];
		$Genero = $_POST['genero'];
		$Estado = $_POST['estado'];
		$nombreOk = FALSE;
		$edadOk   = FALSE;
		$Fecha2 = $_POST['fecha2'];

		if ($nombre=="") 
			print "<p class=\"aviso\">No ha escrito su nombre</p>\n";
		else 
			$nombreOk = TRUE;

		if ($edad=="") 
			print "<p class=\"aviso\">No ha escrito su edad</p>\n";
		elseif (!is_numeric($edad)) 
			print "<p  class=\"aviso\">No ha escrito la edad como numero</p>\n";
		elseif (!ctype_digit($edad))  
			print "<p class=\"aviso\">No ha escrito la edad como numero entero</p>\n";
		elseif ($edad<0 || $edad>110) 
			print "<p class=\"aviso\">La edad no esta entre 0 y 110 anyos</p>\n";
		else 
			$edadOk = TRUE;
	}else{
		$nombreOk = FALSE;
		$edadOk   = FALSE;

	}

	if(isset($_POST['enviar']) && isset($_POST['texto']) && strcasecmp($_POST['texto'],'') != ""){
	$email=$_POST['texto'];
	echo "    <LI>Email: $email";
	
	

	// Indica la posición del caracter "@" o FALSE si no está
	$posicion_arroba = strpos($email, "@");
	// Busca la aparición de un punto (.) partir de la arroba
	$posicion_punto = strpos($email, ".", $posicion_arroba);
	if ($posicion_arroba && $posicion_punto) {
		
		$usuario = substr($email, 0, $posicion_arroba);
		$dominio = substr($email, $posicion_arroba + 1);
		
		
	} else {
		echo "No es una direccion de email valida<br>\n";
		if (!$posicion_arroba) 
			echo "Le falta el caracter arroba<br>";
		if (!$posicion_punto) 
			echo "El dominio no es valido<br>";
	}	
	
	//if (ereg( "([A-Za-z0-9\.|-|_]+)[@]{1}([A-Za-z0-9\.|-|_]+)[.]{1}([A-Za-z]+)", $mail))
		//echo "Email Valido";
	//else
		//echo "Email No valido!!!!";

}else if(isset($_POST['enviar'])===true && isset($_POST['texto']) === true  && strcasecmp($_POST['texto'],'') == "")
	echo "<br> Introduce una direccion de email";	
	
	if (isset($_POST['enviar']) && $nombreOk && $edadOk) {
		print "    <LI>Nombre: <strong>$nombre</strong>\n";
		print "	   <LI>Edad: <strong>$edad</strong>\n";
		print ("   <LI>Género: $Genero\n");
      	print ("   <LI>Estado: $Estado\n");
      	print ("    <LI>Fecha de nacimiento: $Fecha2\n");
      
		
	}else{
	?>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<br>
			Nombre:  <input type="text" name="nombre" value="" size="20"> <br>
			<br>
			Edad: <input type="text" name="edad" value="" size="20"> <br>
			<br>
			Email: <input type="text" name="email" value="" size="40"><br>	
		
			

		<FORM ACTION="<?php echo $_SERVER['PHP_SELF'] ?>" METHOD="POST">
	<br>
	<td>Gustos</td>
		<td>Inform&aacute;tica <input type="checkbox" name="gustos[]" value="Informatica">
        	Buceo  <input type="checkbox" name="gustos[]" value="Buceo">
        	Magia <input type="checkbox" name="gustos[]" value="Magia">
        	Jazz   <input type="checkbox" name="gustos[]" value="Jazz"></td>
	
	</P>

	<P><LABEL>Género:</LABEL>
		<INPUT TYPE="RADIO" NAME="genero" VALUE="Hombre">Hombre
		<INPUT TYPE="RADIO" NAME="genero" VALUE="Mujer">Mujer
		<INPUT TYPE="RADIO" NAME="genero" VALUE="Ambos" CHECKED>Ambos
	</P>

	<P><LABEL>Estado:</LABEL>
	<SELECT NAME="estado">
	   <OPTION SELECTED>Todos
	   <OPTION>Trabaja
	   <OPTION>Estudia
	   <OPTION>Trabaja/Estudia
	   <OPTION>En Paro
	   
	</SELECT></P>
	<p><label>Selecciona fecha de nacimiento:</label><input id="demo1" type="text" name="fecha2"></p>

	<input type="submit" name="enviar" value="enviar">
</FORM>	

		
	<?php
	}
	?>
</body>
</html>