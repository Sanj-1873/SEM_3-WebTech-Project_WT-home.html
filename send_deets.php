<html>
<body>

<h1>My first PHP page</h1>

<?php
$inputFileType = 'Excel2007';
$inputFileName = 'data.xlsx';
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$worksheetNames = $objReader->listWorksheetNames($inputFileName);

foreach ($worksheetNames as $sheetName) {
    //BELOW IS "WISH CODE":
    foreach($row = 1; $row <=$max_rows; $row+= 100) {
        $dataset = $objReader->getWorksheetWithRows($row, $row+100);
        save_dataset_to_database($dataset);
    }
}
?>

</body>
</html>