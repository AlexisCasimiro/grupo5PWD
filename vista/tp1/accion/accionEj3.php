<?php
    include_once("../../estructura/headerAccion.php");
    $datos=data_submitted();
    $obj=new Datos($datos["nombre"],$datos["apellido"],$datos["direccion"],$datos["edad"]);

?>

<head>
    <link type="text/css" rel="stylesheet" href="../../css/tp1Ej3.css">
</head>
<section>
    <div class="container">
        <h1 class="titulo-tp1-ej3">Datos Personales</h1>
        <p id="datosPersonales"> 
            <?php
                echo("Hola yo soy  ".$obj->getNombre()." ".$obj->getApellido()." .Tengo ".$obj->getEdad()." años"."<br>  y vivo en: ".$obj->getDireccion());
            ?>
        </p>
        <a  id="volver-tp1-ej3" href="../ejercicio3.php">Volver</a>
    </div>
</section>

<?php
include_once("../../estructura/footer.php");
?>