<?php
include_once("../estructura/header.php");
 ?>
 <head>
    <link type="text/css" rel="stylesheet" href="../css/tp1Ej1.css">
</head>
<section class="m-5" id="ejercicio1">
    <div class="container bg-light" id="ej1">

        <h1 class="tituloTpEj1">Ejercicio N°1</h1>
        <form method="get" action="accion/accionEj1.php" name="formulario" id="formulario"> 
            <div class="container">
                <label for="inputNumero">Ingrese un Numero: </label>
                <input type="number"  name="numero" id="numero">
            </div>
            <p><small id="aviso"></small></p>
            <input type="submit" id="enviar" value="Enviar"> 

        </form> 
    </div>
</section>
<script type="text/javascript" src="../js/tp1Ej1.js"></script>
<?php
include_once("../estructura/footer.php");
 ?>