<?php
    include_once("../../../control/tp3/SubirArchivo.php");
    include_once("../../../util/dataSubmit.php");
    $dato= $_FILES["archivo"]; //data_submitted();
    //var_dump($dato); 
    $obj=new SubirArchivo($dato);
    $salida=$obj->cargarArchivo();
    $link=$salida["path"]; // ruta donde se almacena el archivo 
    $tamanio=intval($salida["size"])/(1024*1024);
    //var_dump($salida["exitoTamanio"]);
?>
<head>
    <link type="text/css" rel="stylesheet" href="../../css/tp3Ej1.css">
</head>

    <div class="contenedor">
        <p id="salida"> 
            <?php  
                if($salida["exitoCarga"]){
                    echo("El archivo ".$salida["name"]." se cargo corerctamente "."<br>"." Tamaño".$tamanio." MB");
            ?>
        </p>

        <a id="mostrar" href="<?php echo($link);?>">Mostrar Archivo</a>

        <p id="error">
            <?php } else{
                echo("No se pudo cargar el archivo ");

            }// fin if  
            
            if(!$salida["exitoTamanio"]){
                echo("El archivo excede el tamaño predefinido 2MB");
            }
            ?>


        </p>
        <p><a id="volver" href="../ejercicio1.php">Volver</a></p>
      
           

    </div>
</body>
</html>