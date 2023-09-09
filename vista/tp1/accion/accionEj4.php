<?php
    include_once("../../../control/tp1/VerificaEdad.php");
    include_once("../../../util/dataSubmit.php");
    $datos=data_submitted();
    $obj=new VerificaEdad($datos["edad"]);
    $mayor=$obj->esMayor();
?>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/tp1Ej4.css">
</head>
<div class="contenedor">
    <h1 class="titulo">Informacion de la Persona</h1>
    <p> 
        <?php
        if($mayor){
            echo("Usted es mayor de edad");

        } 
        else{
            echo("Usted es menor de edad");
        }
        
         ?>
    </p>  
    <a id="volver-tp1-ej4" href="../ejercicio4.php">Volver</a> 
</div>