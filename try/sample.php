<?php

require '../vendor/autoload.php'; 

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load('example.xlsx');

$worksheet = $spreadsheet->getActiveSheet();
$rows = $worksheet->toArray();
$header = 0;

foreach($rows as $key => $value){

    if($header > 0){
        $class->insert_data($value);
    } else{
        $header = 1;
    }
}
print_r($rows);

?>