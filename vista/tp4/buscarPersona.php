<?php
$Titulo = "Buscar Persona";
include_once("../estructura/header.php");
?>	
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<link rel="stylesheet" href="../css/tp4Ej7.css">
<script type="text/javascript" src="../js/tp4Ej7buscarPersona.js"></script>

<form class="container pt-3" action="./accion/accionBuscarPersona.php" method="post" name="formBuscarPersona" id="formBuscarPersona">
    <div class="form-group row align-items-center">
        <label for="numDoc" class="col" style="max-width: fit-content">Numero de documento:</label>
        <input type="number" class="form-control col" name="NroDni" id="NroDni" placeholder="Ingrese el numero de documento" style="max-width: 280px; max-height:30px;">
        <button type="submit" class="btn btn-primary btn-sm m-2 enviar" name="enviar" id="enviar">Buscar</button>
    </div>
</form>
<?php
include_once("../estructura/footer.php");
?>	
