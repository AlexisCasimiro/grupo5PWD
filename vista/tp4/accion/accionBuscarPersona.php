<?php
$Titulo = "Buscar Persona por numero de documento";
include_once("../../estructura/headerAccion.php");



$datos = data_submitted();
//echo "<script type='text/javascript'> datosPhp=".json_encode($datos).";</script>";
$objAbmPersona=new AbmPersona();
$objPersona =NULL;
//var_dump($datos); 
if (isset($datos['NroDni'])){
    $listaPersonas = $objAbmPersona->buscar($datos);
    if (count($listaPersonas)==1){
        $objPersona= $listaPersonas[0];
<<<<<<< HEAD
    }
}
//var_dump($objPersona->getDni());
=======


>>>>>>> 2bfef62d7e6c88034f765cce33efcb5f8287c0ca
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="../../css/tp4Ej7.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../js/tp4Ej7accionBuscarPersona.js"></script>

<div class="container row">
    <div class="row">
        <h3 class="col">Datos persona:</h3>
        <span class="col"><button id="editar" class="btn btn-primary">Editar</button></span>
    </div>
    <?php  
        if($objPersona!=null){
            ?>
            <form class="container contenedor" method="get" name="formEditarPersona" action="ActualizarDatosPersona.php" id="formEditarPersona">
            <div class="row form-group">
                <label for="nombre" class="col">Nombre:</label>
                <span class="col" id="personaNombre"><?php echo $objPersona->getNombre(); ?></span>
                <div class="col">
                    <input class="form-control row" type="text" name="Nombre" id="nombre" placeholder="Nuevo nombre">
                    <span class="error-message row"></span>
                </div>


            </div>
            <div class="row form-group">
                <label for="apellido" class="col">Apellido:</label>
                <span class="col" id="personaApellido"><?php echo $objPersona->getApellido(); ?></span>
                <div class="col">
                    <input class="form-control row" type="text" name="Apellido" id="apellido" placeholder="Nuevo apellido">
                    <span class="error-message row"></span>
                </div>
            </div>
            <div class="row form-group">
                <label for="fechaNac" class="col">Fecha de nacimiento:</label>
                <span class="col" id="personaFechaNac"><?php echo $objPersona->getfechaNac(); ?></span>
                <div class="col">
                    <input class="form-control row" type="date" name="fechaNac" id="fechaNac">
                    <span class="error-message row"></span>
                </div>
            </div>
            <div class="row form-group">
                <label for="domicilio" class="col">Domicilio:</label>
                <span class="col" id="personaDomicilio"><?php echo $objPersona->getDomicilio(); ?></span>
                <div class="col">
                    <input class="form-control row" type="text" name="Domicilio" id="domicilio" placeholder="Nuevo domicilio">
                    <span class="error-message row"></span>
                </div>
            </div>
            <div class="row form-group">
                <label for="telefono" class="col">Telefono:</label>
                <span class="col" id="personaTelefono"><?php echo $objPersona->getTelefono(); ?></span>
                <div class="col">
                    <input class="form-control row" type="number" name="Telefono" id="telefono" placeholder="Nuevo telefono">
                    <span class="error-message row"></span>
                </div>
            </div>
            <input type="hidden" name="NroDni" value="<?php echo($objPersona->getDni());?>">
            <button type="submit" class="btn btn-success m-2 enviar mx-auto" name="salvar" id="salvar">Salvar</button>
        </form>
            
            <a href="../buscarPersona.php" style="margin-top: 1.3rem;">Volver</a>

            <?php


        }// fin if 
        else{
            ?>
                <p id="avisoSinPersona"> La persona no se encuentra cargada en la base de datos </p>
            <?php

        }// fin else
    
    ?>

</div>
<?php
    }else{
        ?>
        <div class="container mt-3">
        <h3 class="col">No se encontraron datos de la persona:</h3>
        <a href="../buscarPersona.php" class="btn btn-primary">Volver</a>
    </div>
<?php
    }
}
include_once("../../estructura/footer.php");
?>
