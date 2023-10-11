const form=document.getElementById("formulario");
const inputs=document.getElementsByTagName("input");
linkPrincipal=document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";

form.addEventListener("submit",function(e){
    let cont=0; 
    for(let i=0; i< inputs.length-1;i++){
        if(inputs[i].value=="" || inputs[i].value<0){
            inputs[i].style.border="2px solid red";
            cont++;
        }// fin if 
        
    }// fin for
    if(cont!=0){
        e.preventDefault();
    }// fin if 
     
});  