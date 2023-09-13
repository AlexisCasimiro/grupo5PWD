
$(document).ready(function(){
    $("#formPat").submit(function(event){
        event.preventDefault();
        if(comprobar()) this.submit(); 
    });
});
function comprobar(){
    $('#patente').text(function(){
      //  $('#patente').toUpperCase();
        $ok = patenteOk(this.value);
    });  
    return $ok;
}

jQuery('#patente').on('keyup', function() {
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