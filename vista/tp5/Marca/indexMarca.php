<?php
$Titulo = "Lista Marcas";
include_once("../../estructura/header.php");
$objAbmMarca = new AbmMarca();

$listaMarca = $objAbmMarca->buscar(null);
?>	

<div class="container mt-3">
  <h2 style="text-align: center; color:dodgerblue;">Tabla Marcas</h2>
  <h5 style="text-align: left; color:dodgerblue;">Marcas disponibles</h5>            
  <table class="table">
    <thead>
        <tr><th>id</th>
            <th>Marca</th>
        </tr>
    </thead>
    <tbody>
<?php	
    if( count($listaMarca)>0){
         foreach ($listaMarca as $objMarca) { 
            echo '<tr><td style="width:200px;">'.$objMarca->getidMarca().'</td>';
            echo '<td style="width:200px;">'.$objMarca->getnombreMarca().'</td>';
            echo '<td><a href="editarMarca.php?idMarca='.$objMarca->getidMarca().'">Editar</a></td></tr>';      
        }
    }
?>
    </tbody>
  </table>
</div>

<?php
include_once("../../estructura/footer.php");
?>
