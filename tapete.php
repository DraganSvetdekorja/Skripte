<?php

require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//$spreadsheet = new Spreadsheet();
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("AKTUALNOST_TAPETE_2023.xlsx");


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
	$drawing->setWidth(222, 'px');
	$drawing->setHeight(200, 'px');
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

addImage('tapete2/1003276.jpg','S2',$spreadsheet->getActiveSheet());
addImage('tapete2/1003277.jpg','S3',$spreadsheet->getActiveSheet());
addImage('tapete2/319441.jpg','S4',$spreadsheet->getActiveSheet());
addImage('tapete2/355811.jpg','S5',$spreadsheet->getActiveSheet());
addImage('tapete2/355823.jpg','S6',$spreadsheet->getActiveSheet());
addImage('tapete2/361403.jpg','S7',$spreadsheet->getActiveSheet());
addImage('tapete2/361572.jpg','S8',$spreadsheet->getActiveSheet());
addImage('tapete2/361663.jpg','S9',$spreadsheet->getActiveSheet());
addImage('tapete2/361671.jpg','S10',$spreadsheet->getActiveSheet());
addImage('tapete2/361707.jpg','S11',$spreadsheet->getActiveSheet());
addImage('tapete2/362011.jpg','S12',$spreadsheet->getActiveSheet());
addImage('tapete2/554338.jpg','S13',$spreadsheet->getActiveSheet());
addImage('tapete2/708823.jpg','S14',$spreadsheet->getActiveSheet());
addImage('tapete2/709714.jpg','S15',$spreadsheet->getActiveSheet());
addImage('tapete2/958631.jpg','S16',$spreadsheet->getActiveSheet());
addImage('tapete2/362052.jpg','S17',$spreadsheet->getActiveSheet());
addImage('tapete2/304671.jpg','S18',$spreadsheet->getActiveSheet());
addImage('tapete2/368962.jpg','S19',$spreadsheet->getActiveSheet());
addImage('tapete2/369891.jpg','S20',$spreadsheet->getActiveSheet());
addImage('tapete2/372614.jpg','S21',$spreadsheet->getActiveSheet());
addImage('tapete2/856333.jpg','S22',$spreadsheet->getActiveSheet());
addImage('tapete2/373972.jpg','S23',$spreadsheet->getActiveSheet());
addImage('tapete2/300434.jpg','S24',$spreadsheet->getActiveSheet());
addImage('tapete2/425900.jpg','S25',$spreadsheet->getActiveSheet());
addImage('tapete2/367161.jpg','S26',$spreadsheet->getActiveSheet());
//addImage('tapete2/373356.jpg','S27',$spreadsheet->getActiveSheet());
//addImage('tapete2/372842.jpg','S28',$spreadsheet->getActiveSheet());
addImage('tapete2/364801.jpg','S29',$spreadsheet->getActiveSheet());
addImage('tapete2/379544.jpg','S30',$spreadsheet->getActiveSheet());

addImage('tapete2/378659.jpg','S31',$spreadsheet->getActiveSheet());
addImage('tapete2/378573.jpg','S32',$spreadsheet->getActiveSheet());
addImage('tapete2/379121.jpg','S33',$spreadsheet->getActiveSheet());
addImage('tapete2/230775.jpg','S34',$spreadsheet->getActiveSheet());
addImage('tapete2/907813.jpg','S35',$spreadsheet->getActiveSheet());
addImage('tapete2/707123.jpg','S36',$spreadsheet->getActiveSheet());

addImage('tapete2/855039.jpg','S37',$spreadsheet->getActiveSheet());
addImage('tapete2/707116.jpg','S38',$spreadsheet->getActiveSheet());
addImage('tapete2/662125.jpg','S39',$spreadsheet->getActiveSheet());
addImage('tapete2/713711.jpg','S40',$spreadsheet->getActiveSheet());
addImage('tapete2/914217.jpg','S41',$spreadsheet->getActiveSheet());
addImage('tapete2/937912.jpg','S42',$spreadsheet->getActiveSheet());

addImage('tapete2/927316.jpg','S43',$spreadsheet->getActiveSheet());
addImage('tapete2/954053.jpg','S44',$spreadsheet->getActiveSheet());
addImage('tapete2/908612.jpg','S45',$spreadsheet->getActiveSheet());
addImage('tapete2/914224.jpg','S46',$spreadsheet->getActiveSheet());
addImage('tapete2/907837.jpg','S47',$spreadsheet->getActiveSheet());
addImage('tapete2/156310.jpg','S48',$spreadsheet->getActiveSheet());

addImage('tapete2/204042.jpg','S49',$spreadsheet->getActiveSheet());
addImage('tapete2/1002790.jpg','S50',$spreadsheet->getActiveSheet());
addImage('tapete2/959311.jpg','S51',$spreadsheet->getActiveSheet());
addImage('tapete2/958332.jpg','S52',$spreadsheet->getActiveSheet());


$writer = new Xlsx($spreadsheet);
$writer->save('image10.xlsx');
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);





?>
