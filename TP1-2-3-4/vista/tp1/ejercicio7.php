<?php
    include_once("../estructura/header.php");
?>

<head>
    <link type="text/css" rel="stylesheet" href="../css/tp1Ej7.css">
</head>
<body>
    <div class="container">
        <h1 id="titulo">Operacion entre 2 numeros </h1>
        <form action="accion/accionEj7.php" method="get" name="formulario" id="formulario">
            <div class="form-control">
                <label for="nro1">Elija un Numero:</label>
                <input type="number" name="nro1" id="nro1">

            </div>
            <div class="form-control">
                <label for="nro2">Elija otro numero</label>
                <input type="number" name="nro2" id="nro2">
                
            </div>
            <p><small id="aviso"></small></p>
            <div class="form-control">
                <label for="operacion">Seleccione una operacion</label>
                <select name="operacion" id="operacion">
                    <option value="suma">Sumar</option>
                    <option value="resta">Restar</option>
                    <option value="multiplicacion">Multiplicar</option>
                </select>

            </div>
            <div class="submit">  
                <input type="submit" id="enviar" value="Enviar">

            </div>
        </form>
    </div>
    
    <script type="text/javascript" src="../js/tp1Ej7.js"></script>

<?php
    include_once("../estructura/footer.php");
?>    