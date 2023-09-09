<?php
    include_once("../estructura/header.php");
?>
<head>
    <link type="text/css" rel="stylesheet" href="../css/tp1Ej3.css">
</head>

<div class="container">
        <h1>Complete los siguientes Datos </h1>
        <form action="accion/accionEj3.php" method="get" name="datos" id="datos">
            <div class="formField">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="formField">
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" id="apellido">
            </div>
            <div class="formField">
                <label for="direccion">Direccion: </label>
                <input type="text" name="direccion" id="direccion">

            </div>
            <div class="formField">
                <label for="edad">Edad: </label>
                <input type="number" name="edad" id="edad">

            </div>

            
            <input type="submit" name="enviar" id="enviar" value="Enviar">
        </form>
    </div>

    <script type="text/javascript" src="../js/tp1Ej3.js"></script>

<?php
    include_once("../estructura/footer.php");
?>    