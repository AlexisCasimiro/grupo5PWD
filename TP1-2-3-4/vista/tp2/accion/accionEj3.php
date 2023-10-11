
<?php
    include_once("../../../control/tp2/Login.php");
    include_once("../../../util/dataSubmit.php");
    $datos=data_submitted();
    $obj=new verificarPass($datos["nombre"],$datos["pass"]);

    $encontrado=$obj->findUser();
?>
<head>
    <link type="text/css" rel="stylesheet" href="../../css/tp2Ej3.css">
</head>


<div class="container">
    <h1>LogIn</h1>
    <h3>Bienvenido!!!</h3>

</div>
<div class="volver">
    <a id="volver" href="../ejercicio3.php">Volver</a>
</div>

