function validate_ref(ref) {
    if (ref.length > 0) {
        var regexp = /^[0-9]*$/;
        return regexp.test(ref);
    }
    return false;
}
function validate_nombre(nombre) {
    if (nombre.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(nombre);
    }
    return false;
}
function validate_tipo(tipo) { 
    if (tipo.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(tipo);
    }
    return false;
}
function validate_color(color) {
    if (color.length > 0) {
        var regexp = /^[a-zA-Z]*$/;
        return regexp.test(color);
    }
    return false;
}
function validate_medidas(medidas) {
    if (medidas.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(medidas);
    }
    return false;
}
function validate_peso(peso) {
    if (peso.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(peso);
    }
    return false;
}
function validate_material(material) {
    if (material.length > 0) {
        var regexp = /^[a-zA-Z]*$/;
        return regexp.test(material);
    }
    return false;
}
function validate_fechafabricacion(fecha_fabricacion) {
    if (fecha_fabricacion.length > 0) {
        var regexp = /\d{2}.\d{2}.\d{4}$/;
        return regexp.test(fecha_fabricacion);
    }
    return false;
}


function validate_user() {
    var result = true;

    var ref = document.getElementById('ref').value;
	var nombre = document.getElementById('nombre').value;
	var tipo = document.getElementById('tipo').value;
	var color = document.getElementById('color').value;
	var medidas = document.getElementById('medidas').value;
	var peso = document.getElementById('peso').value;
    var material = document.getElementById('material').value;
    var fecha_fabricacion = document.getElementById('fecha_fabricacion').value;
	
	var v_ref = validate_ref(ref);
	var v_nombre = validate_nombre(nombre);
	var v_tipo = validate_tipo(tipo);
	var v_color = validate_color(color);
	var v_medidas = validate_medidas(medidas);
	var v_peso = validate_peso(peso);
    var v_material = validate_material(material);
    var v_fecha_fabricacion = validate_fecha_fabricacion(fecha_fabricacion);


    if (!v_ref) {
        document.getElementById('e_ref').innerHTML = "La referencia introducida no es válida";
        result = false;
    } else {
        document.getElementById('e_ref').innerHTML = "";
    }
	
	if (!v_nombre) {
        document.getElementById('e_nombre').innerHTML = "El nombre introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_nombre').innerHTML = "";
    }
	
	if (!v_tipo) {
        document.getElementById('e_tipo').innerHTML = "Seleccione un tipo de producto";
        result = false;
    } else {
        document.getElementById('e_tipo').innerHTML = "";//(ref, nombre, tipo, color, medidas, peso, material, fecha_fabricacion, fecha_alta)"
    }
	
	if (!v_color) {
        document.getElementById('e_color').innerHTML = "Seleccione al menos un color";
        result = false;
    } else {
        document.getElementById('e_color').innerHTML = "";
    }
	
	if (!v_medidas) {
        document.getElementById('e_medidas').innerHTML = "Introduzca unas medidas válidas";
        result = false;
    } else {
        document.getElementById('e_medidas').innerHTML = "";
    }
	
	if (!v_peso) {
        document.getElementById('e_peso').innerHTML = "Introduzca un peso válido";
        result = false;
    } else {
        document.getElementById('e_peso').innerHTML = "";
    }

    if (!v_material) {
        document.getElementById('e_material').innerHTML = "Seleccione al menos un material";
        result = false;
    } else {
        document.getElementById('e_material').innerHTML = "";
    }

    if (!v_fecha_fabricacion) {
        document.getElementById('e_fecha_fabricacion').innerHTML = "Introduzca la fecha de fabricación del artículo";
        result = false;
    } else {
        document.getElementById('e_fecha_fabricacion').innerHTML = "";
    }
	return result;
}