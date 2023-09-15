<?php
    include_once("../../estructura/headerAccion.php");
    include_once("../../../configuracion.php");
    //obtengo los datos del formulario
    $datos= data_submitted();
    //busco una persona con el dni ingresado 
    $objAbmPersona= new AbmPersona;
    //creo el arreglo con DniDuenio para buscar()
    $dniDuenio['NroDni']=$datos['DniDuenio'];
    $arrayPersona=$objAbmPersona->buscar($dniDuenio);
    $existe=true;
    if($arrayPersona == []){
        echo "<div class='alert alert-danger' role='alert'>No hay ninguna persona cargada con el número de D.N.I: ".$datos['DniDuenio']."</div>";
        echo "<div class='alert alert-primary' role='alert'><a href='../nuevaPersona.php'>Agregar una nueva Persona</a></div>";
        $existe=false;
    }
    $objAbmAuto= new AbmAuto;
    $patente['patente']=$datos['Patente'];
    $arrayAuto=$objAbmAuto->buscar($patente);
    if($arrayAuto != []){
        echo "<div class='alert alert-danger' role='alert'>Ya hay un auto cargado con la patente: ".$datos['Patente']."</div>";
        $existe=false;
    }

    if($existe){
        $objAbmAutoNuevo=new AbmAuto;
        $alta=$objAbmAutoNuevo->alta($datos);
        if($alta){
            echo "<div class='alert alert-success' role='alert'>Se ingreso Correctamente el auto a la Base de Datos</div>";
        }else{
            echo "<div class='alert alert-danger' role='alert'>No se pudo Ingresar el auto a la base de datos</div>";
        }
    }
?>

<?php
    include_once("../../estructura/footer.php");
?>