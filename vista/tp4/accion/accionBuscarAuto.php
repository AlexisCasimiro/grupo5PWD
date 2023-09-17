<?php
    $Titulo = "Buscar Auto por patente";
    include_once("../../estructura/headerAccion.php");

    $datos = data_submitted();
    $objAbmAuto = new AbmAuto();
    $objAuto = null;
    $objDuenio = null;
    if (isset($datos['patente'])){

        $listaTabla = $objAbmAuto->buscar($datos);
        if (count($listaTabla)==1){
            $objAuto= $listaTabla[0];
            $objDuenio = $objAuto->getobjPersona();
        }
    }
?>
<div class="container mt-3">
  <h2 style="text-align: center; color:dodgerblue;">Buscar Auto por la Patente</h2>
  <h5 style="text-align: center; color:dodgerblue;">Auto registrado en la base de datos</h5>            
<?php if ($objAuto!=null){
?>
  <table class="table">
    <thead>
      <tr><th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
<?php            
        echo '<td style="width:200px;">'.$objAuto->getPatente().'</td>';
        echo '<td style="width:200px;">'. $objAuto->getMarca().' </td>';
        echo '<td style="width:200px;">'.  $objAuto->getModelo().' </td>';       
?>
        </tr>       
    </tbody>
 </table>
 <h4 style="text-align: center; color:dodgerblue;">Datos del Titular</h4> 
 <table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dni Titular</th>
            <th>Telefono</th>
            <th>Domicilio</th>
        </tr>
    </thead>
        <tbody>
            <tr>
<?php            
        echo '<td style="width:200px;">'.$objDuenio->getNombre().'</td>';
        echo '<td style="width:200px;">'. $objDuenio->getApellido().' </td>';
        echo '<td style="width:200px;">'. $objDuenio->getDni().' </td> ';
        echo '<td style="width:200px;">'.  $objDuenio->getTelefono().' </td>';
        echo '<td style="width:200px;">'. $objDuenio->getDomicilio().' </td> ';
?>
            </tr>       
        </tbody>
    </table>        
<?php        
 }else {
    echo '<h5 style="text-align: left; color:red;">No se encontro la Patente solicitada</h5><br>';
}?>
	<a href="../buscarAuto.php" class="btn btn-primary">Volver</a>
</div>

<?php
include_once("../../estructura/footer.php");
?>
