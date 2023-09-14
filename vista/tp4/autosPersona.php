<?php
$Titulo = "Lista Personas";
include_once("../estructura/header.php");
$objAbmPersona = new AbmPersona();

$datos = data_submitted();
$objPersona =NULL;

if (isset($datos['dni'])){
    $listaPersona = $objAbmPersona->buscar($datos);
    if (count($listaPersona)==1){
        $objPersona= $listaPersona[0];
    }
}

?>	

<div class="container mt-3">
    <h2>Titular </h2>
    <p>Titular registrado en la base de datos</p>            
    <table class="table">
        <thead><tr><th>Dni</th>
                <th>Nombre</th>
                <th>Apellido</th></tr>
        </thead>
    <tbody>
<?php 
    echo '<tr><td style="width:200px;">'.$objPersona->getDni().'</td>';
	echo '<td style="width:200px;">'.$objPersona->getNombre().'</td>';
    echo '<td style="width:200px;">'.$objPersona->getApellido().'</td>';
?>
    </tbody>
    </table>
</div>

<div class="container mt-3">
  <h4>Autos del titular </h4>
  <p>Titular registrado en la base de datos</p>            
  <table class="table">
  <thead>
        <tr><th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        </tr>
    </thead>
    <tbody>
<?php 
    echo '<tr><td style="width:200px;">'.$objAuto->getPatente().'</td>';
	echo '<td style="width:200px;">'.$objAuto->getMarca().'</td>';
    echo '<td style="width:200px;">'.$objAuto->getModelo().'</td>';

?>
    </tbody>
  </table>
</div>
