<?php 

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\IReader;
use PhpOffice\PhpSpreadsheet\Writer\IWriter;
use PhpOffice\PhpSpreadsheet\IOFactory;

ini_set('max_execution_time', 0);
require 'dbconfig/db.php';
require 'query/users.php';

$inputFileName = './excelsheepts/Updated_Lekki_Outlets.xlsx';

$spreadsheet = IOFactory::load($inputFileName);
//$spreadsheet->setActiveSheetIndex(0);
$db   = new db();
$conn = $db->connect();
$worksheet = $spreadsheet->getActiveSheet();
$highestRow = $worksheet->getHighestRow(); // e.g. 10

for ($i = 2; $i <= $highestRow; ++$i) {

  $employee_id = $worksheet->getCell('V'.$i)->getValue();
  $outlet_id = $worksheet->getCell('G'.$i)->getValue();
  $entry_date = '2019-10-02';
  $status = '1';

  $it = $conn->prepare("INSERT INTO employee_outlet (employee_id, outlet_id, entry_date, status) values (?,?,?,?)");
  $it->execute(array($employee_id, $outlet_id, $entry_date, $status)); 
  
}

?>
