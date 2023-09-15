<?php
$Titulo="Accion Cambio Dueño";
include_once("../../estructura/headerAccion.php");

$datos=data_submitted();
$datos["patente"]=strtoupper($datos["patente"]); 
$objAuto=new AbmAuto();
$objPersona=new AbmPersona();
$auto=$objAuto->buscar($datos);
$datos["NroDni"]=$datos["Dni"];
$personas=$objPersona->buscar($datos);
?>
<head> 
    <link type="text/css" rel="stylesheet" href="../../css/tp4Ej6.css">
</head>
<section>
    <h3>Modificación De Dueño</h3>
    <div class="container">
        <?php
        if(count($auto)==0){
            ?>
            <div class="avisoAuto">
                <p id="sinAuto">La patente ingresada no se encuentra en la base de datos</p>
                <a href="../nuevoAuto.php" id="cargarNuevoAuto">Ir a cargar nuevo auto</a> 
            </div>
        <?php
        }//fin if
        else{
            if(count($personas)==0){
                ?>
                <div class="avisoPersona">
                    <p id="sinPersona">El DNI de la persona no se encuentra en la base de datos</p>
                    <a href="../nuevaPersona.php" id="cargarNuevaPersona">Cargar a una nueva persona</a>
                </div>        
                <?php


            }// fin if
            else{
                ?>
                <div class="resultado">
                    <?php
                    $parametros['Patente']=$auto[0]->getPatente();
                    $parametros['Marca']=$auto[0]->getMarca();
                    $parametros['Modelo']=$auto[0]->getModelo();
                    $parametros['DniDuenio']=$datos['Dni'];
                    if($objAuto->modificacion($parametros)){
                        ?>
                            <p id="exito"> La modificacion se realizó exitosamente</p>

                        <?php
                    }// fin if 
                    else{
                        ?>
                            <p id="error">Hubo prblemas con la modificacion del dni </p>
                        <?php

                    }
                    ?>

                </div>

                <?php

            }// fin else

        }
        ?>


    </div>
    <a href="../cambioDuenio.php" id="VolverDuenio">Volver</a>
</section>