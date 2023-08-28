<?php

require '../vendor/autoload.php'; 
require_once('calss.php');
$class = new DataImport();

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

if (isset($_FILES['data_upload']) && $_FILES['data_upload']['error']==0) {
    $tmp_name = $_FILES['data_upload']['tmp_name'];
    $name = basename($_FILES['data_upload']['name']);
    move_uploaded_file($tmp_name, 'uploads/'. $name);

    $spreadsheet = $reader->load('uploads/example.xlsx');

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

}else{
    echo "Echo upload file: error number ". $_FILES['data_upload']['error'];
}




?>