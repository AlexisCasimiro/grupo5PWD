<?php
    $Titulo = "Actualizar";
    include_once("../../estructura/headerAccion.php");
//$datos = (data_submitted());
$datos = data_submitted(); // verificar que los datos tengas todas las claves para realizar la modificacion 
$objAbmPersona = new AbmPersona();
 //var_dump($datos);
?>
        <?php
        
            if ($objAbmPersona->modificacion($datos)){
                echo "<div class='alert alert-success' role='alert'>Los datos fueron actualizados corerctamente</div>";
            }
            else{
                echo "<div class='alert alert-danger' role='alert'>Hubo un problema con la modificacion </div>";
            }
            
        ?>

<?php
include_once("../../estructura/footer.php");
?>