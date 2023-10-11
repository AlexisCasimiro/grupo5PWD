<?php
include_once("../../../control/tp1/Numero.php");
include_once("../../../util/dataSubmit.php");
$datos=data_submitted();
$nro=intval($datos["numero"]);
$obj=new Numero($nro);
$tipoNumero=$obj->verificaSigno();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../../css/tp1Ej1.css">
</head>
<body>
<div class="container-tp1-ej1">
    <h1 id="tituloAccion1">El numero seleccionado es:</h1>
    <?php 
   // var_dump($tipoNumero); 
        if($tipoNumero=="+"){
            echo("<p>"."El numero es positivo"."</p>");

        }// fin if
        if($tipoNumero=="-"){
            echo("<p>"."El numero es negativo"."</p>");

        }// fin if 
        if($tipoNumero=="0"){
            echo("<p>"."El numero es cero"."</p>");

        }// fin if 

     ?>
    <div class="volver-tp1-ej1"><a href="../ejercicio1.php" class="volver-accion-ej1">Volver</a></div>
</div>
<script type="text/javascript" src="../../js/tp1Ej1.js"></script>
    
</body>
</html>



