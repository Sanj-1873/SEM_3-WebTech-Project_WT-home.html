<html>
<body>

<h1>My first PHP page</h1>

<?php
$foundInCells = array();
$searchValue = 'USA';
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
    $ws = $worksheet->getTitle();
    foreach ($worksheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(true);
        foreach ($cellIterator as $cell) {
            if ($cell->getValue() == $searchValue) {
                $foundInCells[] = $ws . '!' . $cell->getCoordinate();
            }
        }
    }
}
var_dump($foundInCells);
?>

</body>
</html>