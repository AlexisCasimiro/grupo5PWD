linkPrincipal=document.getElementById("pagina-principal");
linkPrincipal.href="../estructura/principal.php";

$(function(){
  const file=$("#imagen");
  $("#form-cinemas").on("submit",function(e){
    e.preventDefault();
    if(file.val()==""){
      const smal=$("<small></small>").text("Este campo esta vacio");
      $(smal).css("color","red"); 
      $("#input").append(smal);
    }
    else{
      this.submit(); 
    }
  });


    (() => {
        'use strict'
      
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
      
            form.classList.add('was-validated')
          }, false)
        })
    })();




}); 