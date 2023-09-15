<?php
include_once("../../estructura/headerAccion.php");
$datos=data_submitted();
$obj= new DatosEstudios($datos["nombre"],$datos["apellido"],$datos["direccion"],$datos["edad"],$datos["sexo"],$datos["estudios"]);

?>
<head>
    <link type="text/css" rel="stylesheet" href="../../css/tp1Ej5.css">
</head>

<div class="contenedor">
    <h1 id="titulo">InformacionPersonal </h1>
    <p id="info">
        <?php
            echo("Hola yo soy  ".$obj->getNombre()." ".$obj->getApellido()." .Tengo ".$obj->getEdad().
            " años"."<br>  y vivo en: ".$obj->getDireccion()."<br>"." Sexualidad: ".$obj->getSexo()."  y tengo estudios: ".$obj->getEstudios());
        ?>
    </p>
</div>
<a id="volver-tp1-ej5"  href="../ejercicio5.php" class="volver">Volver</a>

<?php
include_once("../../estructura/footer.php");
?>