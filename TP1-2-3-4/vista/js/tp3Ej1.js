linkPrincipal=document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";
$(function(){

    const file=$("#archivo");
    console.log(file.val());
    $("#form").on("submit",function(e){
        e.preventDefault();
        if(file.val()==""){
        const smal=$("<small></small>").text("Este campo esta vacio");
        $(smal).css("color","red"); 
        $(".input").append(smal);     
        }// fin if
        else{
            this.submit();
        }

        // creo el mensaje de error 

    });


}); 