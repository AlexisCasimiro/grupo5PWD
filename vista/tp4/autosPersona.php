<?php
$Titulo = "Lista Personas";
include_once("../estructura/header.php");
$objAbmPersona = new AbmPersona();

$objAbmAuto = new AbmAuto();

$datos = data_submitted();
$objPersona =NULL;

if (isset($datos['NroDni'])){

    $listaPersona = $objAbmPersona->buscar($datos);
    if (count($listaPersona)==1){
        $objPersona= $listaPersona[0];
    }
}

?>	

<div class="container mt-3">
    <h2 style="text-align: center; color:dodgerblue;">Titular</h2>
    <h5 style="text-align: left; color:dodgerblue;">Registro en la base de datos</h5>           
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
	<a href="./listaPersonas.php" class="btn btn-primary">Volver</a>
</div>

<?php
$listaAuto = $objAbmAuto->buscar($datos);

if( count($listaAuto)>0){
?>
<div class="container mt-3">
    <h2 style="text-align: center; color:dodgerblue;">Autos registrados de la persona</h2>           
    <table class="table">
        <thead>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
            </tr>
    </thead>
    <tbody>
        <?php 
   
       foreach ($listaAuto as $objAuto) { 
           echo '<tr><td style="width:200px;">'.$objAuto->getPatente().'</td>';
           echo '<td style="width:200px;">'.$objAuto->getMarca().'</td>';
           echo '<td style="width:200px;">'.$objAuto->getModelo().'</td>';
        }
      ?>
        </tbody>
    </table>
</div>
<?php }
    else{
       ?>
            <div class="container mt-3">
            <h4 style="text-align: keft; color:red;">No se encontraron autos registrados para esta persona</h4> 
            </div>
<?php   
    }
    include_once("../estructura/footer.php");
    ?>

    }
    
    ?>

