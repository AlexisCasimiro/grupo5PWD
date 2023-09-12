$(document).ready(()=>{
    $("#enviar").on("submit",function(patenteOk($("#patente").text())){
        //declaracion de variables
       // if (patenteOk($("#patente").text()) ){   

        //this.submit();
        //}
        
    });
});

jQuery('#patente').on('keyup', function() {
    patenteOk(this.value);
  });
  
  function patenteOk(texto) {
    var patente=$("#patente");
    patente.css("border", "4px solid red");
    var exito = false;
    var patNueva = /^[a-zA-Z][a-zA-Z][0-9][0-9][0-9][a-zA-Z][a-zA-Z]$/;
    var patVieja = /^[a-zA-Z][a-zA-Z][a-zA-Z][0-9][0-9][0-9]$/;
    if (patVieja.test(texto)||patNueva.test(texto)){
        
        patente.css("border", "4px solid green");
        exito = true;
   
    }
    return exito;
    //return regex.test(texto);
  }
  