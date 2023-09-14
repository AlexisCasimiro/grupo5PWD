//Validacion de los datos ingresados para agregar un auto a la base de datos

$(document).ready(()=>{
    $("#form-alta-auto").submit(function(evento){
        //declaracion de variables
        console.log("entro");
        var resp=true;
        var patente=$("#Patente")
        var patNueva = /^[a-zA-Z][a-zA-Z][0-9][0-9][0-9][a-zA-Z][a-zA-Z]$/;
        var patVieja = /^[a-zA-Z][a-zA-Z][a-zA-Z][0-9][0-9][0-9]$/;
        var marca=$("#Marca");
        var modelo=$("#Modelo");
        var dniDuenio=$("#DniDuenio");
        var modeloValue=modelo.val();
        var dniDuenioValue=dniDuenio.val();
        
        //colores de los input default
        patente.css("border", "1px solid grey");
        marca.css("border", "1px solid grey");
        modelo.css("border", "1px solid grey");
        dniDuenio.css("border", "1px solid grey");
        
        if (!(patVieja.test(patente.val()))&&!(patNueva.test(patente.val()))){
            patente.css("border", "1px solid red");
            resp=false;
        }
        if(marca.val()==""){
            marca.css("border", "1px solid red");
            resp=false;
        }
        
        if(!isNaN(modeloValue)){
            if(!(modeloValue.length==4) && !(modeloValue.length==2)){
                modelo.css("border","1px solid red");
                resp=false;
            }
        }else{
            modelo.css("border","1px solid red");
            resp=false;
        }

        if(!(dniDuenioValue.length==8) || dniDuenioValue==""){
            dniDuenio.css("border", "1px solid red");
            resp=false;
        }
        
        //default
        return resp;
    })
});