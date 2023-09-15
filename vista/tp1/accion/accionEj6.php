<?php
    include_once("../../estructura/headerAccion.php");
    $datos=data_submitted();
    $obj=new datosDeportes($datos["nombre"],$datos["apellido"],$datos["direccion"],$datos["edad"],$datos["sexo"],$datos["estudios"],$datos["deporte"]);
    $deportes=$obj->mostrarDeportes();

?>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/tp1Ej6.css">
</head>
<div class="contenedor">
    <h1 class="titulo">Informacion Personal</h1>

    <h3 class="deporte" id="deporte">Deportes que practico</h3>
    <p id="cantDeportes">
        <?php  for($i=0; $i<count($deportes); $i++){
            echo($deportes[$i]."<br>");
        } ?>

    </p>

    
    <a id="volver-tp1-ej6" href="../ejercicio6.php">Volver</a>
</div>
<?php
include_once("../../estructura/footer.php");
?>