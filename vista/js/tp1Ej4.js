const linkPrincipal =document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";
console.log("hola");
// Obtencion de los elementos del formulario
datos=document.getElementById("datos");
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



// Manejo del evento submt
datos.addEventListener("submit",function(e){
    e.preventDefault();
    let salida=false;
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
                console.log("entro a la edad neagtiva");
                salida=aviso(datos[i],i,"La edad no puede ser menor a cero");
                contar++; 
            }// fin if 

        }// fin if 

    }// fin for 

    if(contar==0){
        salida=true; 
        this.submit(); 
    }// fin if 

});