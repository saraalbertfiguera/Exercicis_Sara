function validate_nom(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_familia(array){ //idioma
    var check=false;
    for ( var i = 0, l = array.options.length, o; i < l; i++ ){
        o = array.options[i];
        if ( o.selected ){
            check= true;
        }
    }
    return check;
}

function validate_mesures(texto){
    if (texto.length > 0){
        var reg=/^[0-9]{2,3}[x]{1}[0-9]{2,3}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_material(array){ //aficions
  var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_color(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_pes(texto){
    if (texto.length > 0){
        var reg=/^[0-9]{2,3}*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_pais_fabric(array){ //idioma
    var check=false;
    for ( var i = 0, l = array.options.length, o; i < l; i++ ){
        o = array.options[i];
        if ( o.selected ){
            check= true;
        }
    }
    return check;
}

function validate_data_fabric(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_descripcio(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

/*function validate_familia(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}*/


/*function validate_pais_fabric(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}*/

function validate(){
    var check=true
    
    var v_nom=document.getElementById('nom').value;
    var v_familia=document.getElementById('familia').value;
    var v_mesures=document.getElementById('mesures').value;
    var v_material=document.getElementById('material[]').value;
    var v_color=document.getElementsByName('color');
    var v_pes=document.getElementById('pes').value;
    var v_pais_fabric=document.getElementById('pais_fabric').value;
    var v_data_fabric=document.getElementById('data_fabric');
    var v_descripcio=document.getElementById('descripcio').value;
    
    
    var r_nom=validate_usuario(v_nom);
    var r_familia=validate_password(v_familia);
    var r_mesures=validate_nombre(v_mesures);
    var r_material=validate_DNI(v_material);
    var r_color=validate_sexo(v_color);
    var r_pes=validate_fecha(v_pes);
    var r_pais_fabric=validate_edad(v_pais_fabric);
    var r_data_fabric=validate_idioma(v_data_fabric);
    var r_descripcio=validate_observaciones(v_descripcio);
    
   // "nom, familia, mesures, material, color, pes, pais_fabric, data_fabric, descripcio)"


    if(!r_nom){
        document.getElementById('error_nom').innerHTML = " ! El nom introduït no és vàlid";
        check=false;
    }else{
        document.getElementById('error_nom').innerHTML = "";
    }
    if(!r_familia){
        document.getElementById('error_familia').innerHTML = " ! Has de seleccionar una familia d'article";
        check=false;
    }else{
        document.getElementById('error_familia').innerHTML = "";
    }
    if(!r_mesures){
        document.getElementById('error_mesures').innerHTML = " ! Les mesures introduïdes no són vàlides";
        check=false;
    }else{
        document.getElementById('error_mesures').innerHTML = "";
    }
    if(!r_material){
        document.getElementById('error_material').innerHTML = " ! Has de seleccionar un material";
        check=false;
    }else{
        document.getElementById('error_material').innerHTML = "";
    }
    if(!r_color){
        document.getElementById('error_color').innerHTML = " ! El color introduït no és vàlid";
        check=false;
    }else{
        document.getElementById('error_color').innerHTML = "";
    }
    if(!r_pes){
        document.getElementById('error_pes').innerHTML = " ! El pes introduït no és vàlid";
        check=false;
    }else{
        document.getElementById('error_pes').innerHTML = "";
    }
    if(!r_pais_fabric){
        document.getElementById('error_pais_fabric').innerHTML = " ! Has de seleccionar un país de fabricació";
        check=false;
    }else{
        document.getElementById('error_pais_fabric').innerHTML = "";
    }
    if(!r_data_fabric){
        document.getElementById('error_data_fabric').innerHTML = " ! Has de seleccionar una data de fabricació";
        check=false;
    }else{
        document.getElementById('error_data_fabric').innerHTML = "";
    }
    if(!r_descripcio){
        document.getElementById('error_descripcio').innerHTML = " ! Has d'introduir una descripció d'article";
        check=false;
    }else{
        document.getElementById('error_descripcio').innerHTML = "";
    }
   
    return check;
}