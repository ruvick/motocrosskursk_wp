<?
// https://motocrosskursk.ru/wp-content/themes/motocrosskursk/protocol/kp.php?klass=65 см3 (0910141811Н) (мальчики) - 8 - 10 лет (с 2014 по 2012 г.р.)&chid=27-29 мая 2022
header('Content-Type: text/html; charset=utf-8');

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once("../../../../wp-config.php");

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('protocol.xlsx');
$worksheet = $spreadsheet->getActiveSheet();


if (!empty($_REQUEST["klass"])) {

    $worksheet->setCellValue('A8', $_REQUEST["klass"] . " на " .date("d.m.Y"));

    global $wpdb;
    $q = 'SELECT * FROM `wp_chelenge` WHERE `ch_id` = "'.$_REQUEST["chid"].'" AND `activate` != 0 AND `klass` = "'.$_REQUEST["klass"].'"';
    $reicers = $wpdb->get_results($q);
  
    // print_r($q);
    // return;

    $i = 0; 
    foreach ($reicers as $elem) {
        
        

        $worksheet->insertNewRowBefore(12+$i);
        
        $worksheet->setCellValue('C'.(12+$i), $elem->number);
        $worksheet->setCellValue('D'.(12+$i), $elem->fio);
        $worksheet->setCellValue('E'.(12+$i), $elem->razryad);
        $worksheet->setCellValue('F'.(12+$i), $elem->gorod);
        $worksheet->setCellValue('G'.(12+$i), $elem->comanda);
        $worksheet->setCellValue('H'.(12+$i), $elem->motocicl);
        
        

        $i++;
    }



}






$writer = new Xlsx($spreadsheet);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
if (empty($_REQUEST["klass"]))
header('Content-Disposition: attachment; filename="protocol.xlsx"');
else
header('Content-Disposition: attachment; filename="'.$_REQUEST["klass"].' - '.date("d.m.Y").'.xlsx"');

$writer->save("php://output");


?>