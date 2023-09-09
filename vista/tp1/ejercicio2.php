<?php 
    include_once("../estructura/header.php");
?>
<head> 
    <link type="text/css" rel="stylesheet" href="../css/tp1Ej2.css"> 
</head>

<div class="container">
        <h1 class="titulo"> Ingrese las horas Cursadas de PWD </h1>
        <form action="accion/accionEj2.php" method="get" name="formulario" id="formulario">
            <div class="form-control">
                <label for="lunes">Lunes</label>
                <input name="lunes" id="lunes" type="number"  placeholder="0"> <br>
            </div>
            <div class="form-control">
                <label for="martes">Martes</label>
                <input name="martes" id="martes" type="number" placeholder="0"><br>
            </div>
            <div class="form-control">
                <label for="miercoles">Miercoles</label>
                <input name="miercoles" id="miercoles" type="number" placeholder="0"><br>
            </div>
            <div class="form-control">
                <label for="jueves">Jueves</label>
                <input name="jueves" id="jueves" type="number" placeholder="0"><br>
            </div>
            <div class="form-control">
                <label for="viernes">Viernes</label>
                <input name="viernes" id="viernes" type="number" placeholder="0"><br>
            </div>
        
        <input  type="submit" value="Enviar" > 
    </form>
    </div>
    <script type="text/javascript" src="../js/tp1Ej2.js"></script>

    <?php
    include_once("../estructura/footer.php");
    ?>