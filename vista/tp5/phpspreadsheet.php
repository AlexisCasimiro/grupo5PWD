<?php

require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet(); // crea un obj spreadsheet 
$activeWorksheet = $spreadsheet->getActiveSheet(); // llama al metodo para activar el obj
$activeWorksheet->setCellValue('A1', 'Prueba escribir en A1 !');// en la celda A1 , setea el valor pasado como parametro

$writer = new Xlsx($spreadsheet); // crea un obj para escribir en el excel
$writer->save('grupo5.xlsx');

echo "<h1>Hecho</h1>";

?>