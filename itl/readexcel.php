<?php 

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\IReader;
use PhpOffice\PhpSpreadsheet\Writer\IWriter;
use PhpOffice\PhpSpreadsheet\IOFactory;



//$inputFileName = './excelsheepts/samples.xlsx';

//$spreadsheet = IOFactory::load($inputFileName);
//$spreadsheet->setActiveSheetIndex(0);
//$db   = new db();
//$conn = $db->connect();
//$worksheet = $spreadsheet->getActiveSheet();
//$highestRow = $worksheet->getHighestRow(); // e.g. 10

echo '00';
/*
for ($i = 2; $i <= $highestRow; ++$i) {

  $outletname = $worksheet->getCell('N'.$i)->getValue();
  $outletaddress = $worksheet->getCell('O'.$i)->getValue();
  $clast = $worksheet->getCell('C'.$i)->getValue();
  $cmidle = $worksheet->getCell('D'.$i)->getValue();
  $cfirst = $worksheet->getCell('E'.$i)->getValue();
  $conname = $clast.' '.$cmidle.' '.$cfirst;
  $contactphone = $worksheet->getCell('F'.$i)->getValue();
  $latitude = $worksheet->getCell('Q'.$i)->getValue();
  $longitude = $worksheet->getCell('R'.$i)->getValue();
  $tag_id = $worksheet->getCell('B'.$i)->getValue();
  $decode = $worksheet->getCell('V'.$i)->getValue();
  $typeid = $worksheet->getCell('AA'.$i)->getValue();
  $days = $worksheet->getCell('AB'.$i)->getValue();
  $sequenceno = $worksheet->getCell('AD'.$i)->getValue();

  $it = $conn->prepare("insert into mock_outlet(outletname, outletaddress, contactname,  contactphone, latitude, longitude, tag_id, decode, typeid, days, sequenceno ) values (?,?,?,?,?,?,?,?,?,?,?) ");
  $it->execute(array($outletname, $outletaddress , $conname, $contactphone, $latitude, $longitude,$tag_id, $decode, $typeid,  $days, $sequenceno )); 
  
}
*/

?>
