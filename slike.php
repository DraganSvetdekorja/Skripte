<?php

require 'vendor/autoload.php';

/* Create new Spreadsheet object */
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/* add code that show the issue here... */
function addImage($path,$coordinates,$sheet){
	$drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
	$drawing->setPath($path);
	$drawing->setCoordinates($coordinates);
	$drawing->setWidthAndHeight(235, 100);
	$drawing->setWorksheet($sheet);

	//$drawing->setWorksheet($spreadsheet->getActiveSheet());
	

}

addImage('125-1/905-29V-03-120.jpg','A1',$spreadsheet->getActiveSheet());
addImage('125-1/3186-1A3-03-120.jpg','B1',$spreadsheet->getActiveSheet());
addImage('125-1/3186-3H9-02-140.jpg','C1',$spreadsheet->getActiveSheet());

$writer = new Xlsx($spreadsheet);
$writer->save('image5.xlsx');