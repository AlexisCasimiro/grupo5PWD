//buscarPersona.php
$(document).ready(function () {
   /**  $('#formBuscarPersona').validate({
        rules: {
            dni: {
                required: true,
                minlength:8,
                maxlength:8
            },
        },
        messages: {
            dni: {
                required: 'Por favor ingrese el número de documento',
                minlength: 'El número de documento debe contener mínimo 8 dígitos',
                maxlength: 'El número de documento debe contener máximo 8 dígitos'
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        }

    });

    */

    $('#formBuscarPersona').submit(function(e) {
        e.preventDefault();
        let dni=$("#NroDni").val();
        if(!dni=="" && dni.length==8){
            this.submit(); 
        }
        else{
            $("#aviso").text("Verifique la cantidad de digitos (8 digitos)");
            $("#aviso").css("color","red");
        }

    });



});



