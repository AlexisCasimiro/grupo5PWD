<!--
<!DOCTYPE html>
<html>
   <head>
     <title>Load Excel Sheet in Browser using PHPSpreadsheet</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     
   </head>
   <body>
     <div class="container">
      <br />
      <h3 align="center">Load Excel Sheet in Browser using PHPSpreadsheet</h3>
      <br />
      <div class="table-responsive">
       <span id="message"></span>
          <form method="post" id="load_excel_form" enctype="multipart/form-data">
            <table class="table">
              <tr>
                <td width="25%" align="right">Select Excel File</td>
                <td width="50%"><input type="file" name="select_excel" /></td>
                <td width="25%"><input type="submit" name="load" class="btn btn-primary" /></td>
              </tr>
            </table>
          </form>
       <br />
          <div id="excel_area"></div>
      </div>
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </body>
</html>
<script>
$(document).ready(function(){
    //console.log("entro");
  $('#load_excel_form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"uploadExcel.php",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data)
      {
        $('#excel_area').html(data);
        $('.table').css('width','100%');
      }
    })
  });
});
</script>

-->
<?php
  // EJEMPLO PARA CONVERTIR UNA TABLA HTML EN UN ARCHIVO EXCEL

use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet;;

include_once '../../configuracion.php';
include_once '../../vendor/autoload.php';

//$objReloj =new AbmReloj();
//$listaRelojes=$objReloj->buscar(null);
//var_dump($listaRelojes); 
?>

<!-- CODIGO HTML PARA HACER LA TABLA 
<section>
  <div class="container">
    <h2>Lista de relojes </h2>
    <form action="uploadExcel.php" method="post">
      <table class="table" id="table_content">
        <tr>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Stock</th>
          <th>ID_Tipo</th>
          <th>ID_Marca</th>
        </tr>
         
        <?php
        //foreach($listaRelojes as $reloj){
         // echo('<tr>');
         // echo('<td style="width:30% ; text-align:center">'.$reloj->getnombreReloj().'</td>');
         // echo('<td style="width:30% text-align:center">'.$reloj->getprecio().'</td>');
         // echo('<td style="width:30% text-align:center">'.$reloj->getstock().'</td>');
         // echo('<td style="width:30% text-align:center">'.$reloj->getobjTipo()->getnombreTipo().'</td>');
         // echo('<td style="width:30% text-align:center">'.$reloj->getobjMarca()->getnombreMarca().'</td>');
         // echo('</tr>');
        //}// fin for 
        
        ?>

      
      </table>
      <input type="hidden" name="file_content" id="file_content">
      <button type="submit" name="convertit" id="convertir"> Convertir a Excel</button>
    </form>
  </div>
  <script src="../libs/node_modules/jquery/dist/jquery.min.js"></script>
</section>

<script>
  $(document).ready(function(){
    $("#convertir").click(function(){
      var tabla = '<table>';
      tabla += $('#table_content').html();
      tabla+='</table>';

      $("#file_content").val(tabla);
      $("#convertir").submit(); 
    })
  });
</script>

-->

 <!-- LEER LOS DATOS DESDE UN EXCEL  -->

 <?php
  $nombreArchivo="../../relojes.xlsx";
  $documento=IOFactory::load($nombreArchivo);  // carga el archivo excel que esta en el proyecto  (ver como se puede hacer si no esta en el proyecto)
  $worksheet=$documento->getActiveSheet(); 
  $totalHojas=$documento->getSheetCount(); // obtiene la cantidad de hojas del excel 
  $hojaActual=$documento->getSheet(0); // trabaja en la primera hoja , si hay mas hay que especificar  el numero

  /** 
echo('<table>'.PHP_EOL);
foreach($hojaActual->getRowIterator() as $row){ // getRowIterator itera los datos de un excel por filas 
    echo('<tr>'.PHP_EOL);
    $datos =$row->getCellIterator();
    $datos->setIterateOnlyExistingCells(true);  // para indicarle que itere solo donde hay datos en la hoja (datos es un array asociativo)

    foreach($datos as $unDato){
      echo('<td>'.$unDato->getValue().'</td>'); // itera la fila actual   (va iterando por filas y en esta parte lo hace por columnas)
      var_dump($unDato); 
    }// fin for

    echo('</tr>'.PHP_EOL);
}// fin for
echo('</table>'.PHP_EOL);
echo("<br>");
*/

$colMax=$hojaActual->getHighestDataColumn();
$filaMax=$hojaActual->getHighestDataRow();
echo($colMax."<br>");
echo($filaMax."<br>");

$resultados=[];
foreach($worksheet->getRowIterator() as $index=>$row){
  $celdaIterador=$row->getCellIterator();
  $celdaIterador->setIterateOnlyExistingCells(true); 
  $row_content=[];
  foreach($celdaIterador as $cell){
    array_push($row_content,$cell->getValue());
  }// fin  for 
  $resultados[]=$row_content;
}// fin for 

//$i=9;
//$data=$resultados[$i];
//var_dump(sizeof($resultados)); 
$i=0;
$datosNuevos=[];
//  recorrido del array para determinar si hay un campo vacio que lo ignore  
$cantDatos=count($resultados[$i]);

while($i<sizeof($resultados)){
  if($cantDatos!=0){
    //echo("entro al if  <br>");
    for($w=0;$w<count($resultados[$i]);$w++){
       
      $datosNuevos[$i][$w]=$resultados[$i][$w];
      //echo($resultados[$i][$w]."<br>");
    }// fin for 
  }// fin if 
  $cantDatos=count($resultados[$i]);
  $i++;
  //echo($i."<br>");
}// fin while

//var_dump($datosNuevos); 

 ?>

