//accionBuscarPersona.php
//Lógica editar
document.addEventListener('DOMContentLoaded', function () {
    botonEditar = document.getElementById("editar");
    botonSalvar = document.getElementById("salvar");
    inputs = document.querySelectorAll("input");
    inputs.forEach(function (input) {
        input.style.display = 'none';
    });
    botonSalvar.style.display = 'none';
    botonEditar.addEventListener('click', function () {
        inputs.forEach(function (input) {
            if (input.style.display == 'none') {
                input.style.display = 'block';
            }
            botonEditar.style.display = 'none';
            botonSalvar.style.display = 'block';
        });
    })

    $(document).ready(function () {

        $.validator.addMethod("soloLetras", function (value, element) {
            return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
        });

        $.validator.addMethod("domicilio", function (value, element) {
            return this.optional(element) || /^[A-Za-z\s]+ \d+$/.test(value);
        });


        $('#formEditarPersona').validate({
            rules: {
                nombre: {
                    required:true,
                    soloLetras: true
                },
                apellido: {
                    required:true,
                    soloLetras: true
                },
                domicilio: {
                    required:true,
                    domicilio: true
                },
                fechaNac:{
                    required:true
                },
                telefono:{
                    required:true
                }
            },
            messages: {
                nombre: {
                    required: "Por favor ingrese el nombre.",
                    soloLetras: 'Por favor ingrese un nombre válido'
                },
                apellido: {
                    required: "Por favor ingrese el apellido.",
                    soloLetras: 'Por favor ingrese un apellido válido'
                },
                domicilio: {
                    required: "Por favor ingrese el domicilio.",
                    domicilio: 'Por favor ingrese un domicilio válido'
                },
                telefono: {
                    required: "Por favor ingrese el numero de telefono.",
                },
                fechaNac: {
                    required: "Por favor ingrese la fecha de nacimiento.",
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                error.insertAfter(element);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid').addClass('is-valid');
            }
        });
    });

    $('#formEditarPersona').submit(function (e) {
        if ($('#formEditarPersona').valid()) {
           
        } else {
            e.preventDefault(); // Evita el envío si el formulario no es válido
        }
    });

   
});

