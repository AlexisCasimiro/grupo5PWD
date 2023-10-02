<?php

require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();
$activeWorksheet->setCellValue('A1', 'Prueba escribir en A1 !');

$writer = new Xlsx($spreadsheet);
$writer->save('grupo5.xlsx');

echo "<h1>Hecho</h1>";

?>