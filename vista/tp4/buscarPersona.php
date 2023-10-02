<?php
$Titulo = "Buscar Persona";
include_once("../estructura/header.php");
?>	

<head>
<link rel="stylesheet" href="../css/tp4Ej7.css">
</head>



<form class="container pt-3" action="./accion/accionBuscarPersona.php" method="post" name="formBuscarPersona" id="formBuscarPersona">
    <div class="form-group row align-items-center">
        <label for="numDoc" class="col" style="max-width: fit-content">Numero de documento:</label>
        <input type="number" class="form-control col" name="NroDni" id="NroDni" maxlength="8" placeholder="Ingrese el numero de documento" style="max-width: 280px; max-height:30px;">
        <small id="aviso"></small>
        <button type="submit" class="btn btn-success btn-sm m-2 enviar" name="enviar" id="enviar">Buscar</button>
    </div>
</form>
<script type="text/javascript" src="../js/tp4Ej7buscarPersona.js"></script>
<?php
include_once("../estructura/footer.php");
?>	

