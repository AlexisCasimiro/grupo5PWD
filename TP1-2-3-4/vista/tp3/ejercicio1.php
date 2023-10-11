<?php
    include_once("../estructura/header.php");
?>
<head>
    <link type="text/css" rel="stylesheet" href="../css/tp3Ej1.css">
</head>
    <div class="container w-50">
        <?php
        // mando el form a index.php (carpeta vista), esa a su vez la manda al controller para que se comunique con el modelo
        // esta manera en el index.php que esta en la vsita solo uso ese archivo para mandar distintas respuestas según los resultados  
        // obtengo los datos , lo envio a un accion y luego se los mando al control
        ?>
        <h1 class="p-3 mb-3">Seleccione el archivo a subir</h1>
        <form action="accion/accionEj1.php" id="form" method="POST" enctype="multipart/form-data">
            <div class="input">
                <input type="file"  name="archivo" id="archivo">
            </div>
            
            <div class="p-3 mb-3">
                <button type="submit" class="btn btn-primary">Subir</button>

            </div>
            

        </form>
    </div>
    <script type="text/javascript" src="../js/tp3Ej1.js"></script>
<?php
    include_once("../estructura/footer.php");
?>
   