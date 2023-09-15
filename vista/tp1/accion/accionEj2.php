<?php
    include_once("../../estructura/headerAccion.php");
    $horas=data_submitted();
    $obj=new Horas($horas);
    $cantHoras=$obj->horasTotales();

?>
<head> 
    <link type="text/css" rel="stylesheet" href="../../css/tp1Ej2.css"> 
</head>

<section>
    <div class="container">
        <h1 class="titulo-ej2">Horas semanales de PWD</h1>
        <p id="resultado"><?php echo($cantHoras." horas"); ?></p>
        <a id="volver-tp1-ej2" href="../ejercicio2.php">Volver</a>
    </div>
</section>

<?php
include_once("../../estructura/footer.php");
?>