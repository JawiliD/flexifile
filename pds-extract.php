<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

function extractCells($filePath, $marker) {
    if (!file_exists($_FILES['filePath']['tmp_name'])) {
        throw new Exception('File does not exist');
    }

    $filePath = $_FILES['filePath']['tmp_name'];
    $spreadsheet = IOFactory::load($filePath);
    $sheet = $spreadsheet->getActiveSheet();

    $extractedData = [];

    foreach ($sheet->getRowIterator() as $row) {
        foreach ($row->getCellIterator() as $cell) {
            if ($cell->getValue() == $marker) {
                // Extract cells based on marker position
                $extractedData[] = $row->getCellByColumnIndex($cell->getColumn() - 1)->getValue();
            }
        }
    }

    return $extractedData;
}


// Get the file path from the input
$filePath = $_POST['filePath'];

// Get the marker from the input
$marker = $_POST['marker'];

// Extract the cells
$extractedData = extractCells($filePath, $marker);

// Print the extracted data
echo json_encode($extractedData);
?>
