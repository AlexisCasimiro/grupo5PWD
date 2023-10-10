<?php
$Titulo = "Lista Tipos";
include_once("../../estructura/headerAccion.php");
$objAbmTipo = new AbmTipo();

$listaTipo = $objAbmTipo->buscar(null);
?>	

<div class="container mt-3">
  <h2 style="text-align: center; color:dodgerblue;">Tabla Tipos</h2>
  <h5 style="text-align: left; color:dodgerblue;">Tipos disponibles</h5>            
  <form action="editarTipo.php" method="post">
    <table>
        <tr>
            <th style="width:30%">Id</th>
            <th style="width:70%">Tipo de Reloj</th>
            <th style="width:auto"></th>
            <th style="width:auto"></th>
        </tr>
        
            <?php if(count($listaTipo)>0){
                foreach($listaTipo as $tipo){?>
                    <tr>
                    <td><input type="hidden" name="idTipo" value="<?php echo($tipo->getidtipo()) ?>"> <?php echo($tipo->getidtipo()) ?></td>
                    <td><input type="hidden" name="nombreTipo" value="<?php echo($tipo->getnombretipo()) ?>"> <?php echo($tipo->getnombretipo())?></td>
                    <td><input type="submit" name="accion" id="editar" value="editar"></td>
                    <td><input type="submit" name="accion" id="borrar" value="borrar"></td>
                    </tr>
                <?php    
                }// fin for 
            } ?>
    </table>
  </form>
  <form action="crearHC.php" method="post">
            <input type="submit" name="accion" id="genHC" value="Generar Excel">
  </form>
</div>

<?php
include_once("../../estructura/footer.php");
?>
