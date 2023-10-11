<?php
$Titulo = "Buscar Persona por numero de documento";
//include_once("../../../configuracion.php");
include_once("../../estructura/headerAccion.php");
include_once("../../../control/tp4/AbmPersona.php");
include_once("../../../util/funciones.php");


$datos = (data_submitted());
echo "<script type='text/javascript'> datosPhp=".json_encode($datos).";</script>";
/*$obj=new AbmPersona;
$datos=["nroDni"=>"28326986"];
$persona=$obj->buscar($datos); <-- esto es lo que intenté hacer pero no me funciono la bd*/

$persona = [//<-- este es el objeto que cree provisoriamente
    "NroDni" => $datos,
    "Nombre" => "Juan",
    "Apellido" => "Perez",
    "Domicilio" => "Avenida Siempreviva",
    "Telefono" => "299765437",
    "fechaNac" => "26/07/1992"
];
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

    <form class="container contenedor" name="formEditarPersona" action="ActualizarDatosPersona.php" id="formEditarPersona">
        <div class="row form-group">
            <label for="nombre" class="col">Nombre:</label>
            <span class="col" id="personaNombre"><?= $persona["Nombre"] ?></span>
            <div class="col">
                <input class="form-control row" type="text" name="nombre" id="nombre" placeholder="Nuevo nombre">
                <span class="error-message row"></span>
            </div>


        </div>
        <div class="row form-group">
            <label for="apellido" class="col">Apellido:</label>
            <span class="col" id="personaApellido"><?= $persona["Apellido"] ?></span>
            <div class="col">
                <input class="form-control row" type="text" name="apellido" id="apellido" placeholder="Nuevo apellido">
                <span class="error-message row"></span>
            </div>
        </div>
        <div class="row form-group">
            <label for="fechaNac" class="col">Fecha de nacimiento:</label>
            <span class="col" id="personaFechaNac"><?= $persona["fechaNac"] ?></span>
            <div class="col">
                <input class="form-control row" type="date" name="fechaNac" id="fechaNac">
                <span class="error-message row"></span>
            </div>
        </div>
        <div class="row form-group">
            <label for="domicilio" class="col">Domicilio:</label>
            <span class="col" id="personaDomicilio"><?= $persona["Domicilio"] ?></span>
            <div class="col">
                <input class="form-control row" type="text" name="domicilio" id="domicilio" placeholder="Nuevo domicilio">
                <span class="error-message row"></span>
            </div>
        </div>
        <div class="row form-group">
            <label for="telefono" class="col">Telefono:</label>
            <span class="col" id="personaTelefono"><?= $persona["Telefono"] ?></span>
            <div class="col">
                <input class="form-control row" type="number" name="telefono" id="telefono" placeholder="Nuevo telefono">
                <span class="error-message row"></span>
            </div>
        </div>
        <button type="submit" class="btn btn-success m-2 enviar mx-auto" name="salvar" id="salvar">Salvar</button>
    </form>
</div>
<?php
include_once("../../estructura/footer.php");
?>