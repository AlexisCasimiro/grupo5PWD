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
<h3>Autoss</h3>
<?php if ($objAuto!=null){?>

	<label>Patente</label><br/>
	<input id="patente" readonly name ="patente" width="100" type="text" value="<?php echo $objAuto->getPatente()?>"><br/>
	<label>Marca</label><br/>
	<input id="marca" readonly name="marca"width="100" type="text" value="<?php echo $objAuto->getMarca()?>"><br/>
	<label>Modelo</label><br/>
	<input id="modelo" readonly name="modelo"width="100" type="text" value="<?php echo $objAuto->getModelo()?>"><br/>
    <label>DNI Dueño</label><br/>
	<input id="duenio" readonly name="duenio"width="100" type="text" value="<?php echo $objAuto->getdniDuenio()?>"><br/>


<?php }else {
    
    echo "<p>No se encontro la Patente solicitada";
}?>








<?php
include_once("../../estructura/footer.php");
?>