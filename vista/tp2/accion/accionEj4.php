<?php

    include_once("../../../control/tp2/Cine.php");
    include_once("../../../util/dataSubmit.php");
    $datos=data_submitted();
    $obj=new Cine($datos["titulo"],$datos['autores'],$datos["director"],$datos["guion"],$datos["produccion"],$datos["anio"],$datos["nacionalidad"],$datos["genero"],$datos["duracion"],$datos["re"],$datos["sinopsis"]);
?>

<head>
    <link type="text/css" rel="stylesheet" href="../../css/tp2Ej4.css">
</head>
<div class="containerAc">
    <h1 class="titulo">La pelicula Introducida es: </h1>
     <p class="caracteristicas"><strong class="datosCine">Titulo: </strong>   <?php echo($obj->getNombre()) ?> </p>
     <p class="caracteristicas"><strong class="datosCine">Actores: </strong>  <?php echo($obj->getActores()) ?>  </p>
     <p class="caracteristicas"><strong class="datosCine">Director: </strong>  <?php echo($obj->getDirector()) ?>  </p>
     <p class="caracteristicas"><strong class="datosCine">Guión: </strong>  <?php echo($obj->getGuion()) ?>  </p>
     <p class="caracteristicas"><strong class="datosCine">Producción: </strong>  <?php echo($obj->getProduccion()) ?>  </p>
     <p class="caracteristicas"><strong class="datosCine">Año: </strong>  <?php echo($obj->getNacionalidad()) ?>  </p>
     <p class="caracteristicas"><strong class="datosCine">Nacionalidad: </strong>  <?php echo($obj->getGenero()) ?>  </p>
     <p class="caracteristicas"><strong class="datosCine">Género:  </strong>  <?php echo($obj->getGenero()) ?>  </p>
     <p class="caracteristicas"><strong class="datosCine">Duración: </strong>  <?php echo($obj->getDuracion()) ?>  </p>
     <p class="caracteristicas"><strong class="datosCine">Restricciones de edad: </strong>  <?php echo($obj->getRestriccion()) ?>  </p>
     
</div>

<div>
    <a id="volver" href="../ejercicio4.php">Volver</a>
</div>