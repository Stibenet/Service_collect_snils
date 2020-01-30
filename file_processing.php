<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Exception;

$new_file = 'upload/' . $_FILES['file']['name'];
// копирование файла
if (copy($_FILES['file']['tmp_name'], $new_file)) {
    echo "Файл загружен на сервер";
} else {
    echo "Ошибка при загрузке файла";
}
echo "<br>";
try {
    $spreedsheet = IOFactory::load($new_file);
    $worksheet = $spreedsheet->getActiveSheet();
    $rows = [];
    foreach ($worksheet->getRowIterator() AS $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
        $cells = [];
        foreach ($cellIterator as $cell) {
            $cells[] = $cell->getValue();
            print_r($cells[0] . "<br>");
        }
        $rows[] = $cells;
    }

     //print_r($rows);
    //echo $spreedsheet->getActiveSheet()->getCell('A2');
} catch (Exception $e) {
} catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
}

$row = 1;
if (($handle = fopen($new_file, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}

?>
<a href="index.php">Перейти на главную</a>

