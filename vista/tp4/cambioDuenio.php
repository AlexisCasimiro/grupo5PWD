<?php
$Titulo="Cambio de Dueño";
include_once("../estructura/header.php");

?>
<head>
    <link type="text/css" rel="stylesheet" href="../css/tp4Ej6.css">
</head>
<section>
    <h2 style="text-align: center; color:dodgerblue;">Cambio de dueño</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="" id="cambioDuenio" method="POST" action="./accion/accionCambioDuenio.php">
                    <div class="formField">
                        <label for="patente"> Ingrese la patente del Auto:</label>
                        <input type="text" name="patente" id="patente" maxlength="7" placeholder="AAA789">
                        <small id="avisoPatente"></small>
                    </div>
                    <div class="formField">
                        <label for="dniDuenio">Ingrese el nuevo DNI del Dueño:</label>
                        <input type="text" name="Dni" id="dni" maxlength="8" placeholder="32000111">
                        <small id="avisoDni"></small>
                    </div>
                    <button class="btn btn-primary"  id="enviarDatos">Cambiar</button>

                </form>

            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="../js/tp4Ej6.js"></script>
<?php
    include_once("../estructura/footer.php");
?>
