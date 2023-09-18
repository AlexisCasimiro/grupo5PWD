
$(document).ready(function(){
    $("#formPat").submit(function(event){
        event.preventDefault();
        if(comprobar()){
            this.submit(); 
        }else{
            alert ("El formato adecuado es: AAA123 O AA123BB");
        }
    });
});
function comprobar(){
    $('#patente').text(function(){
        $ok = patenteOk(this.value);
    });  
    return $ok;
}

jQuery('#patente').on('keyup', function() {
    $("#patente").val($("#patente").val().toUpperCase());
    patenteOk(this.value);
});

function patenteOk(texto) {  
    var patente=$("#patente");
    patente.css("border", "5px solid red");
    var exito = false;
    var patNueva = /^[a-zA-Z][a-zA-Z][0-9][0-9][0-9][a-zA-Z][a-zA-Z]$/;
    var patVieja = /^[a-zA-Z][a-zA-Z][a-zA-Z][0-9][0-9][0-9]$/;
    if (patVieja.test(texto)||patNueva.test(texto)){
        patente.css("border", "4px solid green");
        exito = true;  
    }
    return exito;
  }
