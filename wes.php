<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
$drawing->setName('Paid');
$drawing->setDescription('Paid');
$drawing->setPath('125-1/905-29V-03-120.jpg'); /* put your path and image here */
$drawing->setCoordinates('A1');
//$drawing->setOffsetX(110);
//$drawing->setRotation(25);
$drawing->setWidthAndHeight(400, 175);
$drawing->getShadow()->setVisible(true);
$drawing->getShadow()->setDirection(45);
$drawing->setWorksheet($spreadsheet->getActiveSheet());

$writer = new Xlsx($spreadsheet);
$writer->save('image3.xlsx');