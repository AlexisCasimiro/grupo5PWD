<?php 
include_once("../../estructura/headerAccion.php");
$datos=data_submitted();
$obj =new cine($datos["edad"],$datos["tipoCliente"]);
$entrada=$obj->calcularPrecio();

?>
<head>
    <link rel="stylsheet" type="text/css" href="../../css/tp1Ej8.css">
</head>
<div class="contenedor">
    <h1 class="titulo">Cinema</h1>
    <div class="precio">
        <p> Valor de la entrada: <?php echo("$".$entrada) ?></p>
    </div>
    <a id="volver" href="../ejercicio8.php">Volver</a>
</div>

<?php
include_once("../../estructura/footer.php");
?>