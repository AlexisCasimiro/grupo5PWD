linkPrincipal=document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";
$(function(){
    //console.log("hola");
    const txt=$("#archivo");

    $("#form").on("submit",function(e){
        e.preventDefault();
        if(txt.val()==""){
            const smal=$("<small></small>").text("Campo vacio");
            $(smal).css("color","red"); 
            //console.log("entro a la opcion vacio");
            $(".txtArchivo").append(smal);

        }
        else{
            this.submit(); 
        }
    }); 

}); 