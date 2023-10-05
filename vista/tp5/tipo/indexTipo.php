<?php
$Titulo = "Lista Tipos";
include_once("../../estructura/header.php");
$objAbmTipo = new AbmTipo();

$listaTipo = $objAbmTipo->buscar(null);
?>	

<div class="container mt-3">
  <h2 style="text-align: center; color:dodgerblue;">Tabla Tipos</h2>
  <h5 style="text-align: left; color:dodgerblue;">Tipos disponibles</h5>            
  <table class="table">
    <thead>
        <tr><th>id</th>
            <th>Tipo</th>
        </tr>
    </thead>
    <tbody>
<?php	
    if( count($listaTipo)>0){
         foreach ($listaTipo as $objTipo) { 
            echo '<tr><td style="width:200px;">'.$objTipo->getidTipo().'</td>';
            echo '<td style="width:200px;">'.$objTipo->getnombreTipo().'</td>';
            echo '<td><a href="editarTipo.php?idTipo='.$objTipo->getidTipo().'">Editar</a></td></tr>';      
        }
    }
?>
    </tbody>
  </table>
</div>

<?php
include_once("../../estructura/footer.php");
?>
