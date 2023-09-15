<?php
$Titulo="Accion Cambio de Dueño";
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
    <div class="container mt-3">
        <h3 style="text-align: center; color:dodgerblue;">Modificación De Dueño</h3>  
        <?php
        if(count($auto)==0){
            ?>
            <div class="avisoAuto">
                <p id="sinAuto">La patente ingresada no se encuentra en la base de datos</p>
                <a href="../nuevoAuto.php" id="cargarNuevoAuto" class="btn btn-primary">Ir a cargar nuevo auto</a> 
            </div>
        <?php
        }//fin if
        else{
            if(count($personas)==0){
                ?>
                <div class="avisoPersona">
                    <p id="sinPersona">El DNI de la persona no se encuentra en la base de datos</p>
                    <a href="../nuevaPersona.php" id="cargarNuevaPersona" class="btn btn-primary">Cargar a una nueva persona</a>
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
                            <p id="error">Hubo problemas con la modificacion del dni </p>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }// fin else
        }
        ?>
        <a href="../cambioDuenio.php" class="btn btn-primary">Volver</a>
    </div>
</section>
<?php
include_once("../../estructura/footer.php");
?>
