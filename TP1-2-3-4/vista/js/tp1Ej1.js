let linkPrincipal=document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";
 
const numero=document.getElementById("numero");
const form=document.getElementById("formulario");
console.log(numero);
form.addEventListener("submit",function(e){
    e.preventDefault();
    if(numero.value==""){
        numero.style.border="solid 1px red"; 
        aviso =document.getElementById("aviso");
        aviso.innerHTML="Este campo no puede estar vacio";
        aviso.style.color="red"; 
 
    }
    else{
        this.submit(); 

    } 

});