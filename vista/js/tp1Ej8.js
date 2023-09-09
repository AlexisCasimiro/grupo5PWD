linkPrincipal=document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";
const edad=document.getElementById("edad");
const tipoEstudiante=document.getElementsByName("tipoCliente");
const datos=document.getElementById("cine");
let c=0; 

datos.addEventListener("submit",function(e){
    e.preventDefault();
    if(!tipoEstudiante[0].checked && !tipoEstudiante[1].checked){
        const avisoEst=document.getElementById("avisoCliente");
        avisoEst.display="block";
        avisoEst.innerHTML="el campo no puede estar vacio";
        avisoEst.style.color="red";
        c++; 
    }
    
    if(edad.value==""){
        const avisoEdad=document.getElementById("avisoEdad");
        avisoEdad.display="block";
        avisoEdad.innerHTML="el campo no puede estar vacio";
        avisoEdad.style.color="red";
        c++; 
    }// fin if 

    if(c==0){
        this.submit();
    }

});


/**
 * Limpia los valores ingresados por el formulario
 */

const botonLimpiar=document.getElementById("limpiar");
botonLimpiar.addEventListener("click",function(){
    const form =document.getElementById("cine");
    form.reset();
});
