<?php
    include_once '../../../configuracion.php';
    include_once '../../estructura/headerAccion.php';

    $datos =data_submitted();
    $resp=false; 
    $objMarca=new AbmMarca();

    if(isset($datos['accion'])){
        if(($datos['accion']=='editar')){
            if($objMarca->modificacion($datos)){
                $resp=true; 
            }// fin if 
        }// fin if
        if($datos['accion']=='borrar'){
            if($objMarca->baja($datos)){
                $resp=true; 

            }// fin if 

        }// fin if 
        if($datos['accion']=='nuevo'){
            if($objMarca->alta($datos)){
                $resp=true;
            }// fin if 

        }// fin if
        if($reps){
            $mensaje="La accion ".$datos['accion']."  se realizao correctamente " ;
        }
        else{
            $mensaje="Hubo un problema con la accion ".$datos['accion']." ";
            
        }
    }// fin if
?>

<div class="container">
    <?php
    echo($mensaje);
    ?>
</div>