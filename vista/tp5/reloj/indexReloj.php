<?php
$Titulo = "Lista Relojes";
include_once("../../estructura/headerAccion.php");
$objAbmReloj = new AbmReloj();


$listaReloj = $objAbmReloj->buscar(null);
?>	

<div class="container mt-3">
  <h2 style="text-align: center; color:dodgerblue;">Tabla Reloj</h2>
  <h5 style="text-align: left; color:dodgerblue;">Relojess disponibles</h5>            
  <table class="table">
    <thead>
        <tr><th>id</th>
            <th>Reloj</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
<?php	
    if( count($listaReloj)>0){
         foreach ($listaReloj as $objReloj) { 
            echo '<tr><td style="width:200px;">'.$objReloj->getidReloj().'</td>';
            echo '<td style="width:200px;">'.$objReloj->getnombreReloj().'</td>';
            echo '<td style="width:200px;">'.$objReloj->getobjTipo()->getnombreTipo().'</td>';
            echo '<td style="width:200px;">'.$objReloj->getobjMarca()->getnombreMarca().'</td>';
            echo '<td style="width:200px;">'.$objReloj->getprecio().'</td>';
            echo '<td style="width:200px;">'.$objReloj->getstock().'</td>';
            echo '<td><a href="editarReloj.php?idReloj='.$objReloj->getidReloj().'">Editar</a></td></tr>';      
        }
    }
?>
    </tbody>
  </table>
</div>

<?php
include_once("../../estructura/footer.php");
?>
