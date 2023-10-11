
<?php 
        include_once ("../../../control/tp3/SubirTexto.php");
        include_once("../../../util/dataSubmit.php");
        $datos=data_submitted();
        
        // llamado a un obj de la clase control
        $objControl=new SubirTexto($_FILES["archivo"]);
        

        // llamado a los metodos de la clase control
        $archivo=$objControl->subeTxt();  
        //var_dump($archivo); 
    ?>

    <head>
        <link type="text/css" rel="stylesheet" href="../../css/tp3Ej2.css">
    </head>

    <div class="container">
        <h1 class="titulo">Lectura del archivo Txt</h1>
        <p class="info">
        <?php 
            if($archivo["exitoCarga"]){
                $myFile=fopen($archivo["path"],"r");
                echo(fread($myFile,filesize($archivo["path"]))); 
                fclose($myFile);

            // fin if
        ?> 
        </p>
        <p id="error">
            <?php
                }
                else{
                    echo("Verifique la extension o el tamaño del archivo (menor a 2MB)");
                }// fin else 
            ?>
        </p>
        <a id="volver" href="../ejercicio2.php">Volver</a>
    
    </div>
