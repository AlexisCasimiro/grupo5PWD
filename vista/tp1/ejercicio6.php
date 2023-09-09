<?php
    include_once("../estructura/header.php");
?>
<head>
    <link rel="stylesheet" type="text/css" href="../css/tp1Ej6.css">
</head>
    <div class="container">
        <h1>Complete los siguientes Datos </h1>
        <form action="accion/accionEj6.php" method="post" name="datos" id="datos">
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
            
            <div class="formField">
                <fieldset id="tipoSexo" class="field">
                    <legend>Sexo</legend>
                    <input type="radio" name="sexo" id="masculino" value="masculino">
                    <label for="masculino">Masculino:</label>
                    <input type="radio" name="sexo" id="femenino" value="femenino">
                    <label>Femenino:</label>
                    <input type="radio" name="sexo" id="otro" value="otro">                    
                    <label>Otro:</label>
                </fieldset>
                <small id="tipoSexo"></small>  
                <!--el mensaje de error lo pone dentro del fieldset-->  
            </div>
            <div class="formField">
                <fieldset id="tipoEstudio">
                    <legend>Estudios</legend>
                    <input type="radio" name="estudios" id="noTiene" value="noTiene">
                    <label>No tiene estudios</label>
                    <input type="radio" name="estudios" id="primario" value="primario">
                    <label>Estudios Primarios</label>
                    <input type="radio" name="estudios" id="secundarios" value="secundarios">
                    <label>Estudios Secundarios </label>
                </fieldset> 
                <small id="tipoEstudio"></small>     
            </div>
            
            
            <div class="formField">
                <fieldset  id="deportes">
                    <legend>Deporte</legend>
                    <input type="checkbox" name="deporte[]" class="sport"  id="futbol" value="futbol">
                    <label>Futbol:</label>
                    <input type="checkbox" name="deporte[]" class="sport" id="voley" value="voley">
                    <label>Voley:</label>
                    <input type="checkbox" name="deporte[]" class="sport" id="tenis" value="tenis">
                    <label>Tenis:</label>
                    <input type="checkbox" name="deporte[]" class="sport" id="basquet" value="basquet">
                    <label>Basquet</label>

                </fieldset>
                <small id="tipoDeporte"></small>
            </div>        
            <input type="submit" name="enviar" id="enviar" value="Enviar">
        </form>
    </div>

    <script type="text/javascript" src="../js/tp1Ej6.js"></script>

<?php
    include_once("../estructura/footer.php");
?>