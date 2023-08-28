<?php

require '../vendor/autoload.php'; 

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load('example.xlsx');

$worksheet = $spreadsheet->getActiveSheet();
$rows = $worksheet->toArray();


print_r($rows);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
</body>
</html>