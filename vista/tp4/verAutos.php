<?php
    $Titulo = "Ver Autos";
    include_once("../estructura/header.php");
    $objAbmAuto=new AbmAuto;
    $arregloAutos=$objAbmAuto->buscar(null);
?>
    <div class="container mt-3">
    <h2 style="color:dodgerblue">Tabla Auto</h2>
    <p>Listado de Autos con el nombre y apellido de su respectivo dueño</p>            
    <table class="table">
        <thead>
            <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>D.N.I del Dueño</th>
                <th>Nombre del Dueño</th>
                <th>Apellido del Dueño</th>
            </tr>
        </thead>
        <tbody>
    <?php	
        if( count($arregloAutos)>0){
            foreach ($arregloAutos as $objAuto) { 
                echo '<tr><td style="width:200px;">'.$objAuto->getPatente().'</td>';
                echo '<td style="width:200px;">'.$objAuto->getMarca().'</td>';
                echo '<td style="width:200px;">'.$objAuto->getModelo().'</td>';
                echo '<td style="width:200px;">'.$objAuto->getobjPersona()->getDni().'</td>';
                echo '<td style="width:200px;">'.$objAuto->getobjPersona()->getNombre().'</td>';
                echo '<td style="width:200px;">'.$objAuto->getobjPersona()->getApellido().'</td></tr>';    
            }
        }else{
            echo "<div class='alert alert-success' role='alert'>No se encontró Autos cargados en la Base de Datos</div>";
        }
    ?>
        </tbody>
    </table>
    </div>

<?php
    include_once("../estructura/footer.php");
?>