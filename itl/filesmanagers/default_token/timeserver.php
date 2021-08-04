<?php 

ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db(); 
$conn = $db->connect();

$region = trim($_REQUEST['region']);
$date =  date('Y-m-d');

if($region=='1') {

  $stm = $conn->prepare (DbQuery::sentTokenCountAdmin());
  $stm->execute(array($date));
  $rows = $stm->fetch();
  echo $rows['total'];

}else{

  $stm = $conn->prepare (DbQuery::sentTokenCount());
  $stm->execute(array($region, $date));
  $rows = $stm->fetch();
  echo $rows['total'];
  
}





?>
