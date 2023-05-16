<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$sheet->getActiveSheet()->getColumnDimension('A')->setWidth(200);
$sheet->getProtection()->setSheet(true);

$drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
$drawing->setPath("125-1/905-29V-03-120.jpg");
$drawing->setName('Logo');
$drawing->setCoordinates('B2');
$drawing->setWidthAndHeight(400, 175);
$drawing->setWorksheet($spreadsheet->setActiveSheetIndex(0));   

$drawing1 = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
$drawing1->setPath("125-1/3186-1A3-03-120.jpg");
$drawing1->setName('New image');
$drawing1->setCoordinates('c2');
$drawing1->setWidthAndHeight(400, 175);
$drawing1->setWorksheet($spreadsheet->setActiveSheetIndex(0));  

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);



?>
