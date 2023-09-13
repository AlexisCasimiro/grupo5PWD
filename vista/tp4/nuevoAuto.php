<?php
include_once("../estructura/header.php");
include_once("../../Control/tp4/AbmPersona.php")
?>

<h1 style="text-align: center; color:dodgerblue;">Agregar un nuevo auto a la base de datos</h1>
    <form class="row g-3 needs-validation" method="get" id="form-alta-auto" action="accion/accionNuevoAuto.php" novalidate>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Patente</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Ingrese la patente">
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Marca</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Ingrese la marca">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="validationCustom03" placeholder="Ingrese el modelo">
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">D.N.I</label>
            <input type="text" class="form-control" id="validationCustom04" placeholder="Ingrese D.N.I del dueño">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-10">
            <input class="btn btn-primary" type="submit" value="Cargar datos">
        </div>
    </form>
    <hr style="height: 3px; color:green;">
<h3 style="text-align: center; color:dodgerblue;">Datos de las personas cargadas en la base de datos</h3>
<?php
    $objAbmPersona=new AbmPersona;
    $arregloPersonas=$objAbmPersona->buscar(null);
    echo "<ul>";
    foreach($arregloPersonas as $unaPersona){
        echo "<li>Nombre y Apellido:".$unaPersona->getNombre()."  ".$unaPersona->getApellido()."------->"."D.N.I:".$unaPersona->getDni()."</li>";
    }
    echo "<ul>";
?>
    <p><a href="nuevaPersona.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Agregar una Persona</a></p>
<script src="../js/tp4Ej5.js"></script>

<?php
include_once("../estructura/footer.php");
?>