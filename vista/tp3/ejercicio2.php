<?php
    include_once("../estructura/header.php");
?>
<head>
    <link type="text/css" rel="stylesheet" href="../css/tp3Ej2.css">
</head>

<div class="container w-50">

        <h1 class="p-3 mb-3 bg-primary">LECTURA DE UN ARCHIVO txt</h1>
        <form action="accion/accionEj2.php" id="form" method="POST" enctype="multipart/form-data">
            <div class="txtArchivo">
                <p class="">Subir archivo</p>
                <input type="file"  name="archivo" id="archivo">
            </div>
            
            <div class="p-3 mb-3">
                <button type="submit" class="btn btn-primary">Leer</button>

            </div>
            

        </form>
    </div>

    <script type="text/javascript" src="../js/tp3Ej2.js"></script>

<?php
    include_once("../estructura/footer.php");
?>