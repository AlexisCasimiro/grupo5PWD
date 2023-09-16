$(function(){

    let patente=$("#patente");
    let dni=$("#dni");

    $("#cambioDuenio").on("submit",function(e){
        e.preventDefault();
        if(patente.val()==""){
            $("#avisoPatente").css("color","red");
        }// fin if 
        else if(dni.val()==""){
            $("#avisoDni").text("Campo vacio");
            $("#avisoDni").css("color","red");
        }
        else{
            if(comprobar()){
                this.submit(); 
            }
        }
    });

    function comprobar(){
        $('#patente').text(function(){
            $ok = patenteOk(this.value);
        });  
        return $ok;
    }   
    function patenteOk(texto) {  
        var patente=$("#patente");
        patente.css("border", "2px solid red");
        var exito = false;
        var patNueva = /^[a-zA-Z][a-zA-Z][0-9][0-9][0-9][a-zA-Z][a-zA-Z]$/;
        var patVieja = /^[a-zA-Z][a-zA-Z][a-zA-Z][0-9][0-9][0-9]$/;
        if (patVieja.test(texto)||patNueva.test(texto)){
            patente.css("border", "2px solid green");
            exito = true;  
        }
        return exito;
      }
});
