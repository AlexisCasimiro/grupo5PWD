<?php
    include_once("../estructura/header.php");
?>
<head>
    <link type="text/css" rel="stylesheet" href="../css/tp1Ej8.css">
</head>
    <div class="container">
        <h1>Cinema</h1>
        <form action="accion/accionEj8.php" method="post" name="cine" id="cine">
            <div class="form-control">
                <label for="edad">Ingrese su edad:</label>
                <input type="number" name="edad" id="edad">
                <small id="avisoEdad"></small>
            </div>
            <div class="form-control">
                <label for="estudiante">Estudiante</label>
                <input type="radio" name="tipoCliente" id="estudiante" value="si">
                <label for="otro">Otro</label>
                <input type="radio" name="tipoCliente" id="noEstudiante" value="no">
                <small id="avisoCliente"></small>
            </div>
            <div class="form-control">
                <input type="submit" id="enviar" value="Enviar">
                <input type="button" id ="limpiar" value="limpiar">
                
            </div>
    </form>
    </div>
    
         
    <script type="text/javascript" src="../js/tp1Ej8.js"></script>

<?php
    include_once("../estructura/footer.php");
?>