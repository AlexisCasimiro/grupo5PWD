<?php

require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$nombreArchivo = 'grupo5.xlsx';
$arrayDatos = array('A1'=>'Hola Mundo', 'A3'=>'54');

$inputFileName = './grupo5.xlsx';

function crearHoja($nombreArchivo, $arrayDatos){
    $spreadsheet = new Spreadsheet();
    $activeWorksheet = $spreadsheet->getActiveSheet();
    foreach ($arrayDatos as $celda => $valor){
        $activeWorksheet->setCellValue($celda, $valor);
    }
    
   $writer = new Xlsx($spreadsheet);
   $writer->save($nombreArchivo);
   
}


function leerHoja($inputFileName){
    /** Load $inputFileName to a Spreadsheet object **/
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
    $arrayDatos = array('A1'=>'Hola Mundo', 'A3'=>'54');
    $activeWorksheet = $spreadsheet->getActiveSheet();
    foreach ($arrayDatos as $celda => $valor){
        $activeWorksheet->setCellValue($celda, $valor);
    }

    $spreadsheet->getActiveSheet()->getStyle('B2')
    ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);
$spreadsheet->getActiveSheet()->getStyle('B2')
    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
$spreadsheet->getActiveSheet()->getStyle('B2')
    ->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$spreadsheet->getActiveSheet()->getStyle('B2')
    ->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$spreadsheet->getActiveSheet()->getStyle('B2')
    ->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$spreadsheet->getActiveSheet()->getStyle('B2')
    ->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$spreadsheet->getActiveSheet()->getStyle('B2')
    ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
$spreadsheet->getActiveSheet()->getStyle('B2')
    ->getFill()->getStartColor()->setARGB('FFFF0000');


    $writer = new Xlsx($spreadsheet);
    $writer->save($inputFileName);
}


leerHoja($inputFileName);
//echo crearHoja($nombreArchivo, $arrayDatos);
echo "<h1>Hecho</h1>";

?>