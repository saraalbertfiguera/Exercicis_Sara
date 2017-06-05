<form method="post" name="formart" id="formart" onsubmit="return validate_art();" action="index.php?page=controller_articulos">
		<?php
		if(isset($error)){
			print ("<BR><span CLASS='styerror'>" . "* ".$error . "</span><br/>");
		}?>

		<p>  
			<label for="ref">Ref.</label>
			<input name="ref" id="ref" type="text" placeholder="ref" value="<?php echo $_POST?$_POST['ref']:""; ?>" />
			<span id="e_ref" class="styerror"></span>
		</p>
        <p>
			<label for="nombre">Nombre</label>
			<input name="nombre" id="nombre" type="text" placeholder="nombre" value="<?php echo $_POST?$_POST['nombre']:""; ?>" />
			<span id="e_nombre" class="styerror"></span>
		</p>
        <p>
			<label for="tipo">Tipo de artículo</label>
			<input name="tipo" id="tipo" type="text" placeholder="tipo" value="<?php echo $_POST?$_POST['tipo']:""; ?>" />
			<span id="e_tipo" class="styerror"></span>
		</p>
        <p>
			<label for="color">Color</label>
			<input name="color" id="color" type="text" placeholder="color" value="<?php echo $_POST?$_POST['color']:""; ?>" />
			<span id="e_color" class="styerror"></span>
		</p>
        <p>
			<label for="medidas">Medidas</label>
			<input name="medidas" id="medidas" type="medidas" placeholder="medidas" value="<?php echo $_POST?$_POST['medidas']:""; ?>" />
			<span id="e_medidas" class="styerror"></span>
		</p>
        <p>
			<label for="peso">Peso</label>
			<input name="peso" id="peso" type="peso"  placeholder="peso" value="<?php echo $_POST?$_POST['peso']:""; ?>" />
			<span id="e_peso" class="styerror"></span>
		</p>
		<p>
			<label for="material">Material</label>
			<input name="material" id="material" type="material"  placeholder="material" value="<?php echo $_POST?$_POST['material']:""; ?>" />
			<span id="e_material" class="styerror"></span>
		</p>
		<p>
			<label for="fecha_fabricacion">Fecha de fabricación</label>
			<input name="fecha_fabricacion" id="fecha_fabricacion" type="fecha_fabricacion"  placeholder="fecha_fabricacion" value="<?php echo $_POST?$_POST['peso']:""; ?>" />
			<span id="e_fecha_fabricacion" class="styerror"></span>
		</p>
		<input name="Submit" type="submit" value="Registrar"/>
	</form>
	