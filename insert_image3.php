<?php

require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//$spreadsheet = new Spreadsheet();
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("Ponudba_Lesnina_novi_vzorci-11.05.2023.xls");


$sheet = $spreadsheet->getActiveSheet();
//$sheet->setCellValue('A1', 'Hello World !');
//$sheet->getDefaultColumnDimension()->setWidth(400, 'px');
//$sheet->getDefaultRowDimension()->setRowHeight(175, 'px');
//$sheet->getActiveSheet()->getColumnDimension('A')->setHight(175);
$sheet->getProtection()->setSheet(true);

function addImage($path,$coordinates,$sheet){
	$drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
	$drawing->setPath($path);
	$drawing->setCoordinates($coordinates);
	//$drawing->setWidthAndHeight(400, 175);
	$drawing->setWidth(235, 'px');
	$drawing->setHeight(100, 'px');
	$drawing->setWorksheet($sheet);
	//$drawing->setWorksheet($spreadsheet->getActiveSheet());
	

}


/* $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
$drawing->setPath("125-1/905-29V-03-120.jpg");
$drawing->setName('Logo');
$drawing->setCoordinates('B2');
$drawing->setWidthAndHeight(400, 175);
$drawing->setWorksheet($spreadsheet->setActiveSheetIndex(0));   

$drawing1 = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
$drawing1->setPath("125-1/3186-1A3-03-120.jpg");
$drawing1->setName('New image');
$drawing1->setCoordinates('C2');
$drawing1->setWidthAndHeight(400, 175);
$drawing1->setWorksheet($spreadsheet->setActiveSheetIndex(0));  
 */

addImage('125/905-29V-03-120.jpg','H2',$spreadsheet->getActiveSheet());
addImage('125/3186-1A3-03-120.jpg','H3',$spreadsheet->getActiveSheet());
addImage('125/3186-3H9-02-140.jpg','H4',$spreadsheet->getActiveSheet());

$writer = new Xlsx($spreadsheet);
$writer->save('image7.xlsx');
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);





?>
