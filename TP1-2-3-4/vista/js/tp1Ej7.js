linkPrincipal=document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";
const nor1=document.getElementById("nro1");
const nor2=document.getElementById("nro2");
const form=document.getElementById("formulario");
const aviso =document.getElementById("aviso");
console.log(aviso);

form.addEventListener("submit",function(e){
    e.preventDefault();
    if(nor1.value=="" || nor2.value==""){
        aviso.innerHTML="Los campos no pueden estar vacio";
        aviso.style.color="red"; 
        aviso.style.fontSize="1.2rem";
       // aviso.style.color="red";
    }// fin if 
    else{
        this.submit(); 
    }// fin else
});