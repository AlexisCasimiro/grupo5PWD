<?php  
    include_once("../../../control/tp1/Operacion.php");
    include_once("../../../util/dataSubmit.php");
    $datos=data_submitted();
    $obj=new Operacion($datos["nro1"],$datos["nro2"],$datos["operacion"]);
    $resultado=$obj->resolucion();

?>
<head>
    <link type="text/css" rel="stylesheet" href="../../css/tp1Ej7.css">
</head>

<div class="contenedor">
    <h1 id="titulo">Resultado de la operacion</h1>
    <p> El resultado de la <?php echo($_GET["operacion"]) ?> entre 
        <?php echo($_GET["nro1"]." y ".$_GET["nro2"]."  es: "); ?>
    </p>   
    <p> <?php echo($resultado); ?></p>

    <a id="volver" href="../ejercicio7.php">Volver</a>
</div>