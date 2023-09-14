<?php
include_once("../estructura/header.php");
include_once("../../Control/tp4/AbmPersona.php")
?>

<h1 style="text-align: center; color:dodgerblue;">Agregar una nueva persona a la base de datos</h1>
    <form class="row g-3 needs-validation" method="get" id="form-alta-persona" action="accion/accionNuevaPersona.php" novalidate>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <label class="form-label">N° DNI</label>
            <input type="text" class="form-control" id="NroDni" name="NroDni" placeholder="Ingrese el DNI de la persona">
            <br><br>
        </div>
        <div class="col-md-4">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese el apellido de la persona">
            <br><br>
        </div>
        <div class="col-md-4">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre de la persona">
            <br><br>
        </div>
        <div class="col-md-4">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="text" class="form-control" id="fechaNac" name="fechaNac" placeholder="Ingrese la fecha de nacimiento de la persona">
            <br><br>
        </div>
        <div class="col-md-4">
            <label class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Ingrese el teléfono de la persona">
            <br><br>
        </div>
        <div class="col-md-4">
            <label class="form-label">Domicilio</label>
            <input type="text" class="form-control" id="Domicilio" name="Domicilio" placeholder="Ingrese el domicilio de la persona">
            <br><br>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-10">
            <input class="btn btn-primary" type="submit" value="Cargar datos">
        </div>
    </form>
    <hr style="height: 3px; color:green;">
<h3 style="text-align: center; color:dodgerblue;">Datos de las personas cargadas en la base de datos</h3>
<script src="../js/tp4Ej4b.js"></script>

<?php
include_once("../estructura/footer.php");
?>