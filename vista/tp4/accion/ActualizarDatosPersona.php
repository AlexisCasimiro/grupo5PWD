<?php
    $Titulo = "Actualizar";
    include_once("../../estructura/headerAccion.php");
//$datos = (data_submitted());
$datos = data_submitted(); // verificar que los datos tengas todas las claves para realizar la modificacion 
$objAbmPersona = new AbmPersona();
//$objPersona = NULL;
// var_dump($datos);
?>
        <?php
        
            if (isset($datos['NroDni'])){
                $dniPersona["NroDni"] = $datos["NroDni"];
                $array = $objAbmPersona->buscar($dniPersona);
                if (count($array)==0){

                        $Resultado = $objAbmPersona->alta($datos);
                        echo "<div class='alert alert-success' role='alert'>Se agregó correctamente la Persona a la Base de Datos</div>";
                }else{
                    echo "<div class='alert alert-danger' role='alert'>La persona ya se encuentra en la Base de Datos</div>";
                }
            }
            
        ?>
<?php
?>
<?php
include_once("../../estructura/footer.php");
?>