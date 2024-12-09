<<<<<<< HEAD
<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    $file = 'users.xlsx';
    $spreadsheet = file_exists($file) ? \PhpOffice\PhpSpreadsheet\IOFactory::load($file) : new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $userExists = false;
    foreach ($sheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);
        $rowData = iterator_to_array($cellIterator);
        
        if (isset($rowData[0]) && $rowData[0] == $name) {
            $userExists = true;
            break;
        }
        if (isset($rowData[1]) && $rowData[1] == $email) {
            $userExists = true;
            break;
        }
    }

    if ($userExists) {
        echo "Username or Email already exists.";
        exit;
    }

    $lastRow = $sheet->getHighestRow() + 1;
    $sheet->setCellValue('A' . $lastRow, $name);
    $sheet->setCellValue('B' . $lastRow, $email);
    $sheet->setCellValue('C' . $lastRow, password_hash($password, PASSWORD_DEFAULT));

    $writer = new Xlsx($spreadsheet);
    $writer->save($file);

    echo "Signup successful! You can now <a href='book.html'>login</a>";
}
?>
=======
<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    $file = 'users.xlsx';
    $spreadsheet = file_exists($file) ? \PhpOffice\PhpSpreadsheet\IOFactory::load($file) : new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $userExists = false;
    foreach ($sheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);
        $rowData = iterator_to_array($cellIterator);
        
        if (isset($rowData[0]) && $rowData[0] == $name) {
            $userExists = true;
            break;
        }
        if (isset($rowData[1]) && $rowData[1] == $email) {
            $userExists = true;
            break;
        }
    }

    if ($userExists) {
        echo "Username or Email already exists.";
        exit;
    }

    $lastRow = $sheet->getHighestRow() + 1;
    $sheet->setCellValue('A' . $lastRow, $name);
    $sheet->setCellValue('B' . $lastRow, $email);
    $sheet->setCellValue('C' . $lastRow, password_hash($password, PASSWORD_DEFAULT));

    $writer = new Xlsx($spreadsheet);
    $writer->save($file);

    echo "Signup successful! You can now <a href='book.html'>login</a>";
}
?>
>>>>>>> c54bceb77c341f4d6695c774cd99e743beb14e09
