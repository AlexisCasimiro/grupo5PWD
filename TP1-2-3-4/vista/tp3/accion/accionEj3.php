<?php
    include_once("../../../control/tp3/Cinema.php");
    include_once("../../../util/dataSubmit.php");
    $datos=data_submitted();
    $obj=new Cinema($datos["titulo"],$datos['actores'],$datos["director"],$datos["guion"],$datos["produccion"],$datos["anio"],$datos["nacionalidad"],$datos["genero"],$datos["duracion"],$datos["restriccion"],$datos["sinopsis"],$_FILES["imagen"]);
    $cargarImagen=$obj->cargarImagen(); 

?>
<head>
    <link type="text/css" rel="stylesheet" href="../../css/tp3Ej3.css">
</head>

    <div class="container">
        <?php    
            $link=$cargarImagen["path"]; 
            if($cargarImagen["exitoCarga"]){
        ?>
        <div class="presentacionPelicula">
            <div class="pelicula">
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
            <div class="imagen">
                <img src="<?php echo($link)?>" class="img-fluid" width="600px" height="800px"> 
            </div>

        </div>
        <p id="mensaje">
        <?php }
        else{
                echo("Verifique el tamaño (menor a 2MB) y la extension de la imagen ");
        }
        ?>

        </p>



             
        <a id="volver" href="../ejercicio3.php">Volver</a>
    </div>
        