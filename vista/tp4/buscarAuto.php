<?php
$Titulo = "Buscar Auto";
include_once("../estructura/header.php");
 /*
    include_once "../configuracion.php";
    $objAbmAuto = new AbmAuto();

    $listaAuto = $objAbmAuto->buscar(null);
*/
?>	
<div>
    <h1>Buscar Auto por la Patente</h1>
        <form action="accion/accionBuscarAuto.php" method="post" name="formPat" id="formPat">
        Ingrese la Patente: <input type="text" name="patente" id="patente">
        <button type="submit" class="btn btn-success w-10" name="enviar" id="enviar">Buscar</button>
        <p name="aviso" id="aviso">El formato debe ser AAA111 o AA123BB</p>
    </form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="../js/tp4Ej4.js"></script>
<?php

include_once("../estructura/footer.php");
?>