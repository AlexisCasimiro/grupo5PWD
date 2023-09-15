$(function(){

    let patente=$("#patente");
    let dni=$("#dni");

    //console.log(patente.val()); 


    $("#cambioDuenio").on("submit",function(e){
        e.preventDefault();
        if(patente.val()==""){
            $("#avisoPatente").text("Campo vacio");
            $("#avisoPatente").css("color","red");

        }// fin if 
        else if(dni.val()==""){
            $("#avisoDni").text("Campo vacio");
            $("#avisoDni").css("color","red");
        }
        else{
            this.submit(); 
        }

    });


});