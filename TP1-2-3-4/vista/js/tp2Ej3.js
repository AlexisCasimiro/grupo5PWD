linkPrincipal=document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";

// funcion por defecto para usar jquery 

$(function(){
    // obtencion de los elementos usuario y password
    const nombre=$("#nombre");
    const pwd= $("#pass");

    

    // FUNCION QUE VERIFICA LOS CAMPOS VACIOS
    $("#form").on("submit",function(e){
        e.preventDefault();
        let noVacio=false; 

        if(nombre.val()=="" || pwd.val()==""){
            //console.log("entro"); 
            $(".aviso").text("Complete los campos vacios");
            $(".aviso").css("color","red");

        }// fin if 
        else{
            noVacio=true; 
        }// fin else

        // VALIDACION DE CLAVE SEGURA 
        // REQUISITOS => 8 CARACTERES (MIN) - DISTINTO AL NOMBRE DE USUARIO - LETRAS Y NUMEROS
        let longitud=pwd.val().length;
        let contarChart=0; // cuenta la cantidad de caracteres
        let contarInt=0; // cuenta la cantidad de enteros
        let salida=false; 

        // Recorre el string como un array de carateres , usando CharAt
        for(let i=0; i< longitud; i++){
            let unCaracter=parseInt(pwd.val().charAt(i)); // pasa ese caracter a entero
            if(isNaN(unCaracter)){
                contarChart++;

            }// fin if
            else{
                contarInt++;
            }// fin else

            if(longitud<8 || contarInt==0 || pwd.val()==nombre.val()){
                $(".aviso").text("la contraseña NO es segura");
                $(".aviso").css("color","red");

            }// fin if 
            else{
                salida=true;
            }


        }// fin for 

        if(noVacio && salida){
            this.submit(); 
        }

    });    


});// fin 