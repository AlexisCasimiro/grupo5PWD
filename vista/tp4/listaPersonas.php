<?php
$Titulo = "Lista Personas";
include_once("../estructura/header.php");
$objAbmPersona = new AbmPersona();

$listaPersona = $objAbmPersona->buscar(null);
?>	

<div class="container mt-3">
  <h2>Tabla Personas</h2>
  <p>Listado de personas dueñas de autos registradas en la base de datos</p>            
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
            echo '<td><a href="autosPersona.php?dni='.$objPersona->getDni().'">Info</a></td></tr>';      
        }
    }
?>
    </tbody>
  </table>
</div>

<?php
include_once("../estructura/footer.php");
?>