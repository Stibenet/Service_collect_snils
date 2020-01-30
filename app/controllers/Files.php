<?php

namespace Controllers;

use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Files
{

    public static function fileProcessing()
    {
        $inputFileName = htmlspecialchars($_POST['file']);
        $inputFileType = 'Xls';

//        //сохраняем наш файл на сервер в папку /upload/
//        //если не хотите хранить файл на сервере, не забывайте его потом удалить после отправки
//        if (!empty($_FILES['uploaded_file']['tmp_name'])) {
//            $path = $_SERVER['DOCUMENT_ROOT'] . "/upload/" . $_FILES['uploaded_file']['name'];
//            if (copy($_FILES['uploaded_file']['tmp_name'], $path)) {
//                $myFaile = $path;
//                $file_name = $_FILES['uploaded_file']['name'];
//            }
//        }

        /**  Create a new Reader of the type defined in $inputFileType  **/
        try {
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
        } catch (Exception $e) {
        }
        /**  Advise the Reader that we only want to load cell data  **/
        $reader->setReadDataOnly(true);
        /**  Load $inputFileName to a Spreadsheet Object  **/
        try {
            $spreadsheet = $reader->load($inputFileName);
        } catch (Exception $e) {
        }
        var_dump($spreadsheet);

    }
}
