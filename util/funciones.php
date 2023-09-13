<?php

function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
    else
        if(!empty($_GET)) {
            $_AAux =$_GET;
        }
    if (count($_AAux)){
        foreach ($_AAux as $indice => $valor) {
            if ($valor=="")
                $_AAux[$indice] = 'null'	;
        }
    }
    return $_AAux;
}

// auto load register 
spl_autoload_register(function ($class_name){
    //echo($class_name); 
    $directorys = array(
        $_SESSION['ROOT'].'Modelo/',
        $_SESSION['ROOT'].'Modelo/conector/',
<<<<<<< HEAD
        $_SESSION['ROOT'].'Control/tp4/',
=======
        $_SESSION['ROOT'].'Control/',
        $_SESSION['ROOT'].'Control/tp4'
>>>>>>> 4081e1c30d8a8e7d00700d8852732a54c0e1b9cb
      //  $GLOBALS['ROOT'].'util/class/',
        );
    //print_object($directorys) ;
    foreach($directorys as $directory){
        //var_dump($directory); 
        //echo("<br>");
        if(file_exists($directory.$class_name .'.php')){
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory.$class_name .'.php');
            return;
        }
    }
});

?>