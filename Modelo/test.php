<?php
include_once("Auto.php");
include_once("Persona.php");
include_once("./conector/BaseDatos.php");
include_once("../Control/tp4/AbmPersona.php");
$objAuto=new Auto();

//echo("Metedo Cargar un obj de la base de datos <br>");

// metodo cargar un obj de la BD
//$id="ADC 152";
//$objAuto->setPatente($id);
//$auto=$objAuto->cargar(); // devuelve boolean si se cargo o no el obj
//var_dump($auto);
//echo($objAuto->getdniDuenio());


//echo("Metodo Insertar un obj de la base de datos <br>");
// metodo insertar 
// primero tengo que insertar un duenio y despues el auto
//$objAuto->setear("LOA 987","peugeot","1999",25159753);
//$objAuto->insertar(); 


//echo("Metedo Modificar un obj de la base de datos <br>");
// metodo modificar
// tengo mandar todos los atributos del obj por mas que quiera modificar solo uno
//$id="ADC 152";
//$objAuto->setPatente($id);
//$auto=$objAuto->cargar();
//$modelo="2000";
//$objAuto->setModelo($modelo);
//$objAuto->modificar();  


//echo("Metedo Elminar un obj de la base de datos <br>");
// metodo eliminar 
//$id="ADC 152";
//$objAuto->setPatente($id);
//$objAuto->eliminar(); 


//echo("Metedo Listar un obj de la base de datos <br>");
// metodo listar
//$autos=Auto::listar(null); 
//print_r($autos);

/*****************  PERSONA    ******************* */
$objPersona=new Persona();

//echo("metodo cargar <br>");
//$objPersona->setDni(22985265);
//$cargado=$objPersona->cargar();
//var_dump($objPersona->getNombre());

//echo("metodo insertar <br>");
//$objPersona->setear(19066243,"Urra","Juan Pablo","1987-09-26","2994092986","Los Saucos 2765");
//$insertado=$objPersona->insertar();
//var_dump($insertado); 

//echo("metodo modificar <br>");
//$objPersona->setDni(30875962);
//$objPersona->cargar();
//$objPersona->setear(30875962,"Frias","Fernanda","1985-02-15","299147852","Mitre 158");
//$objPersona->modificar();
//$objPersona->setDomicilio($nuevoDomicilio);
//print_r($objPersona); 

//var_dump($modificado);
//echo("metodo eliminar <br>");
//echo("metodo listar <br>");

//echo("Eliminar");
//$objPersona->setDni(19066243);
//$objPersona->eliminar();

//echo("Listar");
//$personas=Persona::listar("");
//print_r($personas);
$abmPrueba= new AbmPersona();
$personas=$abmPrueba->buscar(null);
foreach($personas as $unapersona){
    echo $unapersona->getDni() ."|";
}


?>