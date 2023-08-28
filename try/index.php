<?php

require '../vendor/autoload.php'; 

// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
// $spreadsheet = $reader->load('example.xlsx');

// $worksheet = $spreadsheet->getActiveSheet();
// $rows = $worksheet->toArray();

// if(in_array("JASMIN", $rows)){//search or filter sa array
//     echo "may mango <br/>";
//  }else {
//     echo "walang tinda <br/>";
//  }

// print_r($rows);


use PhpOffice\PhpSpreadsheet\IOFactory;

function extractCells($filePath, $marker) {
    $spreadsheet = IOFactory::load($filePath);
    $sheet = $spreadsheet->getActiveSheet();

    $extractedData = [];

    foreach ($sheet->getRowIterator() as $row) {
        foreach ($row->getCellIterator() as $index => $cell) {
            if ($cell->getValue() == $marker) {
                // Extract cell to the right of the marker
                $nextColumnIndex = $index + 1;
                $nextColumnLetter = PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($nextColumnIndex);
                $nextCellCoordinate = $nextColumnLetter . $cell->getRow();
                $nextCell = $sheet->getCell($nextCellCoordinate);
                $extractedData[] = $nextCell->getValue();
            }
        }
    }

    return $extractedData;
}

// Usage example
$filePath = "example.xlsx";
$marker = "SURNAME";

$extractedCells = extractCells($filePath, $marker);
print_r($extractedCells);





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