<?php
    include_once("../../estructura/headerAccion.php");
    include_once("../../../configuracion.php");
    //obtengo los datos del formulario
    $datos= data_submitted();
    //test borrar despues
    print_r($datos);
    echo $datos['DniDuenio'];
    //
    //busco una persona con el dni ingresado 
    $objAbmPersona= new AbmPersona;
    $dni=$datos['DniDuenio'];
    $dniDuenio['NroDni']=$datos['DniDuenio'];
    
    $array=$objAbmPersona->buscar($dniDuenio);
    
    print_r($array);
    if($array == []){
        echo "<div class='alert alert-danger' role='alert'>No hay ninguna persona cargada con el número de D.N.I:".$datos['DniDuenio']."</div>";
        echo "<div class='alert alert-success' role='alert'><a href='../nuevaPersona.php'>Agregar una nueva Persona</div>";
    }else{
        echo "existe";
    }
?>

<?php
    include_once("../../estructura/footer.php");
?>