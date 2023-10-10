<?php

require '../../../vendor/autoload.php';
include_once '../../../configuracion.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Phpoffice\Phpspreadsheet\Worksheet\Worksheet;
//use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$objAbmTipo = new AbmTipo();

$listaTipo = $objAbmTipo->buscar(null);

$spreadsheet = new Spreadsheet(); // crea un obj spreadsheet 
$activeWorksheet = $spreadsheet->getActiveSheet();


/**
 * Encabezado de la hoja de calculo
 * @param array             //Arreglo con los nombres de las columnas
 * @param Worksheet         //clase hoja
 * @return Worksheet        //clase hoja
 */
function headHC($array, $WP){
    $celda_letra = 64;      // ascii "A"-1
    foreach ($array as $value) {
        $celda = chr(++$celda_letra) . "1";
        $WP->setCellValue($celda, $value);
        
    }

    //Bordes y estilo
    $WP->getStyle('A1:B1')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLUE);
    $WP->getStyle('A1:B1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    $WP->getStyle('A1:B1')->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $WP->getStyle('A1:B1')->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $WP->getStyle('A1:B1')->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $WP->getStyle('A1:B1')->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $WP->getStyle('A1:B1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
    $WP->getStyle('A1:B1')->getFill()->getStartColor()->setARGB('33337777');

    return $WP;
}

/**
 * llenado del cuerpo de la hoja de calculo
 * @param array 
 * @param Worksheet         //clase hoja
 * @return Worksheet        //clase hoja
 */
function bodyHC($array, $WP){
    foreach ($array as $key => $value) { 
        $WP->setCellValue($key, $value);
    }
    $WP->getStyle('A2:B7')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    return $WP;
}

/**
 * Escribir en el archivo de hoja de calculo
 * @param Spreadsheet
 */
function writeHC($spreadsheet){
    $write =PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet,"Xlsx");
    $write->save("grupo5.xlsx");
    //$writer = new Xlsx($spreadsheet);
    //$writer->save('hello world.xlsx');
}



echo "<h1>Andubo</h1>";
$arreglo_celdas = array();
$celda_letra = 65; //chr(65) A
$celda_numero = 2; //chr(50) 2
foreach ($listaTipo as $key => $value) {
    $celda = chr($celda_letra).$celda_numero;
    $celdaSig = chr($celda_letra+1).$celda_numero;
    $datos_id = $value->getidTipo();
    $datos_nombre = $value->getnombreTipo();

    $arreglo_celdas[$celda] = $datos_id;
    $arreglo_celdas[$celdaSig] = $datos_nombre;
    $celda_numero++;
}

$arreglo_titulos = ["ID", "Tipo"];

$activeWorksheet = headHC($arreglo_titulos, $activeWorksheet);
$activeWorksheet = bodyHC($arreglo_celdas, $activeWorksheet);
writeHC($spreadsheet);
echo "<h3>Hecho</h3>";