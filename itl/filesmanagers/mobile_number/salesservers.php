<?php 

ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db();
$conn = $db->connect();

$id = trim($_REQUEST['id']);
$dates =  date('Y-m-d');
$time = date("H:i:s"); 

$stm = $conn->prepare (DbQuery::getUpdateMobileDetails());
$stm->execute(array($id));
$rows = $stm->fetch();

$updateMobileNumber = $conn->prepare (DbQuery::updateMobileDetails());
$updateMobileNumber->execute(array($rows['contactphone'], $rows['outlet_id']));

$updateMobile = $conn->prepare (DbQuery::updateMobileNumber());
$updateMobile->execute(array($id));

$json =array(
  "status"=>'SUCCESSFUL'
);
echo json_encode($json);
