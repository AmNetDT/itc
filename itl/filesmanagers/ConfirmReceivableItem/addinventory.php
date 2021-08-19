<?php
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db();
$conn = $db->connect();

?>
<?php


$supplier_id = $_POST['supplier_id'];
$user_id = $_POST['user_id'];
$stock_id = $_POST['stock_id'];
$batch_name = $_POST['batch_name'];
$uom = $_POST['uom'];
$qty = $_POST['qty'];
$lotnumber = $_POST['lotnumber'];
$stock_type_id = $_POST['stock_type_id'];
$entry_date = $_POST['entry_date'].'T'.date('Y-m-d');
$entry_time =date('h:m:s');

   

$sm = $conn->prepare(DbQuery::insertIntoInvent());
$sm->execute(array($supplier_id, $user_id, $stock_id, $batch_name, $uom, $qty, $lotnumber, $stock_type_id, $entry_date, $entry_time));
$rows = $sm->fetch();
$lastInsertedId = $rows['id'];



$smq = $conn->prepare(DbQuery::getLastInsertedReceivaleItem());
$smq->execute(array($lastInsertedId));
$qresult = $smq->fetch();
$fullname = $qresult['fullname'];
$stock = $qresult['stock'];
$qty = $qresult['qty'];
$batch_name = $qresult['batch_name'];
$uom = $qresult['uom'];
$stocktype = $qresult['stocktype'];
$supplier = $qresult['supplier'];
$lotnumber = $qresult['lotnumber'];
$entry_date = $qresult['entry_date'];

 $json = array(
            "status" => 200,
            "msg" => "Receivable successfully added",
            "data" => "<tr id='$lastInsertedId'  class='rowOdd clickModule clickModule$lastInsertedId'>
                <td> $fullname </td>
                <td>$stock</td>
                <td>$qty</td>
                <td>$batch_name</td>
                <td>$uom</td>
                <td>$stocktype</td>
                <td>$supplier</td>
                <td>$lotnumber</td>
                <td>$entry_date</td>
                <td><img src='endofperiod/image/savebuttons.png'/></td>
                </tr>"
        );

echo  json_encode($json);
?>