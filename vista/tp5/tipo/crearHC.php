<?php

require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
//use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet(); // crea un obj spreadsheet 

$activeWorksheet = $spreadsheet->getActiveSheet();


/**
 * Encabezado de la hoja de calculo
 * @param array 
 * @param Worksheet
 * @return Worksheet
 */
function headHC($array, $SP){

    return $SP;
}

/**
 * llenado del cuerpo de la hoja de calculo
 * @param array 
 * @param Worksheet
 * @return Worksheet
 */
function bodyHC($array, $SP){
    foreach ($array as $key => $value) { 
        $SP->setCellValue($key, $value);
    }
    return $SP;
}



$write =PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet,"Xlsx");
$write->save("grupo5.xlsx");

//$writer = new Xlsx($spreadsheet);
//$writer->save('hello world.xlsx');