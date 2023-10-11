linkPrincipal=document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";
//console.log(document.querySelectorAll('input[name="sexo"]:checked'));
// FUNCION AVISO 
/**COLOCA UNA AVSIO EN CASO QUE EL CAMPO ESTE VACIO
 * @param input element
 * @param i int
 * @return boolean
 */
function aviso(input,i,mensaje){
    input.style.border="1px solid red";
    const cartel=document.createElement("small"); // crea el elemento
    const texto =document.createTextNode(mensaje); // crea un texto para el elemento small
    cartel.appendChild(texto); // añade el mensaje al elemento
    cartel.style.color="red";
    cartel.style.display="block";
    const divPadre=document.getElementsByClassName("formField"); // en cuentra el div padre del input
    divPadre[i].appendChild(cartel);
    return false; 

}// fin function 

function avisoTipoSexo(mensaje){
    const small=document.getElementById("tipoSexo");
    small.display="block"; 
    small.style.color="red"; 
    small.innerText=mensaje;
    return false;

}// fin function

function avisoDeporte(mensaje){
    const small=document.getElementById("tipoDeporte");
    small.display="block"; 
    small.style.color="red";
    small.innerText=mensaje;
    return false;
}// fin function

function checkDeporte(deporte){
    var contar=0; 
    for(var i=0; i<deporte.length;i++){
        if(deporte[i].checked){
            contar++;
            //console.log(contar); 
        }// fin if 

    }// fin for
    if (contar>0){
        salida=true;
         
    }// fin if 
    else{
        salida=false;
    }
    return salida; 

}// fin function

// Manejo del evento submt
datos.addEventListener("submit",function(e){
    e.preventDefault();
    let salida;
    let contar=0; 
    // COMPROBACION DE CAMPO VACIO PARA EL NOMBRE - APELLIDO Y DIRECCION
    for (var i=0; i<datos.length-1; i++){
        if(datos[i].value==""){
            salida=aviso(datos[i],i,"este campo esta vacio");
            contar++;

        }// fin if 

        // COMPROBACION DE LA EDAD
        if(datos[i].name=="edad"){
            edad = parseInt(datos[i].value);
            if(edad<=0){
                //console.log("entro a la edad neagtiva");
                salida=aviso(datos[i],i,"La edad no puede ser menor a cero");
                contar++; 
            }// fin if 

        }// fin if

    }// fin for

    // Verifica si los radio buttom estan activados
    const sexo=document.querySelectorAll('input[name="sexo"]:checked');     
    if(sexo.length==0){
        salida=avisoTipoSexo("Debe seleccionar una opcion");
        contar++;

    }// fin if 

    // verifica si esta chequeado al menos un deporte
    const deportes=document.getElementsByClassName("sport");
    let check=checkDeporte(deportes);
    if(!check){
        salida=avisoDeporte("debe seleccionar al menos una opcion");

    }// fin if 
    
    
    if(contar==0){
        salida=true; 
        this.submit(); 
    }// fin if 

});