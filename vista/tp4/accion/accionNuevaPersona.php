<?php
    $Titulo = "Agregar una nueva persona por su DNI";
    include_once("../../estructura/headerAccion.php");
    include_once("../../../configuracion.php");

    $datos = data_submitted();
    $objAbmPersona = new AbmPersona();
    //$objPersona = NULL;
   // var_dump($datos);
?>
<div class="container mt-3">
    <h2>Registrar nueva persona</h2>
    <table class="table">
        <thead>
            <tr>
                <th>DNI: <index type="text"></index></th>
                <th>Apellido: <index type="text"></index></th>
                <th>Nombre: <index type="text"></index></th>
                <th>Fecha de nacimiento: <index type="text"></index></th>
                <th>Teléfono: <index type="text"></index></th>
                <th>Domicilio: <index type="text"></index></th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                if (isset($datos['NroDni'])){
                    $dniPersona["NroDni"] = $datos["NroDni"];

                    
                    $array = $objAbmPersona->buscar($dniPersona);
                    if (count($array)==0){

                            $Resultado = $objAbmPersona->alta($datos);
                                echo "<p>Se agregaron los datos de la persona";
                    }else{
                        echo "La persona ya esta en la BD";
                    }
                }
                
            ?>
        </tbody>
    </table>
</div>
<?php
?>
<?php
include_once("../../estructura/footer.php");
?>