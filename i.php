<?php
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Hello World !');
    $sheet->setCellValue('B1', 'Divyasundar Sahu !');
    $sheet->getActiveSheet()->getColumnDimension('A')->setWidth(200);
	//$objPHPExcel->getActiveSheet()->getColumnDimension('A1')->setHight(200);
    $sheet->getProtection()->setSheet(true);
    $writer = new Xlsx($spreadsheet);
    $writer->save('hello world.xlsx');
?> 