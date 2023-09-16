<?php
$Titulo = "Lista Personas";
include_once("../estructura/header.php");
$objAbmPersona = new AbmPersona();

$listaPersona = $objAbmPersona->buscar(null);
?>	

<div class="container mt-3">
  <h2 style="text-align: center; color:dodgerblue;">Tabla Personas</h2>
  <h5 style="text-align: left; color:dodgerblue;">Listado de personas dueñas de autos registradas en la base de datos</h5>            
  <table class="table">
    <thead>
        <tr><th>Dni</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
    </thead>
    <tbody>
<?php	
    if( count($listaPersona)>0){
         foreach ($listaPersona as $objPersona) { 
            echo '<tr><td style="width:200px;">'.$objPersona->getDni().'</td>';
            echo '<td style="width:200px;">'.$objPersona->getNombre().'</td>';
            echo '<td style="width:200px;">'.$objPersona->getApellido().'</td>';
            echo '<td><a href="autosPersona.php?NroDni='.$objPersona->getDni().'">Info</a></td></tr>';      
        }
    }
?>
    </tbody>
  </table>
</div>

<?php
include_once("../estructura/footer.php");
?>
