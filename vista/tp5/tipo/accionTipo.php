<?php
    include_once '../../../configuracion.php';
    include_once '../../estructura/headerAccion.php';

    $datos =data_submitted();
    $resp=false; 
    $objTipo=new AbmTipo();

    if(isset($datos['accion'])){
        if(($datos['accion']=='editar')){
            if($objTipo->modificacion($datos)){
                $resp=true; 
            }// fin if 
        }// fin if
        if($datos['accion']=='borrar'){
            if($objTipo->baja($datos)){
                $resp=true; 

            }// fin if 

        }// fin if 
        if($datos['accion']=='nuevo'){
            if($objTipo->alta($datos)){
                $resp=true;
            }// fin if 

        }// fin if
        if($resp){
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