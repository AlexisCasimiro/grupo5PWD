<?php
    $Titulo = "Buscar Auto por patente";
    include_once("../../estructura/headerAccion.php");

    $datos = data_submitted();
    $objAbmAuto = new AbmAuto();
    $objAuto =NULL;
    if (isset($datos['patente'])){

        $listaTabla = $objAbmAuto->buscar($datos);
        if (count($listaTabla)==1){
            $objAuto= $listaTabla[0];
        }
    }
?>
<div class="container mt-3">
  <h2 style="text-align: center; color:dodgerblue;">Buscar Auto por la Patente</h2>
  <h5 style="text-align: center; color:dodgerblue;">Auto registrado en la base de datos</h5>            
  <table class="table">
    <thead>
      <tr><th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
        </tr>
    </thead>
    <tbody>
<?php if ($objAuto!=null){
    echo '<tr><td style="width:200px;">'.$objAuto->getPatente().'</td>';
	echo '<td style="width:200px;">'.$objAuto->getMarca().'</td>';
    echo '<td style="width:200px;">'.$objAuto->getModelo().'</td>';

 }else {
    
    echo '<h5 style="text-align: left; color:red;">No se encontro la Patente solicitada</5>';
}?>
    </tbody>
  </table>
	<a href="../buscarAuto.php" class="btn btn-primary">Volver</a>
</div>

<?php
include_once("../../estructura/footer.php");
?>
