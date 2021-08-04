<?php 

  ini_set('max_execution_time', 0);
  require '../../dbconfig/db.php';
  require '../../query/users.php';

  $db   = new db();
  $conn = $db->connect();

  $id = trim($_REQUEST['id']);

  $stm = $conn->prepare (DbQuery::repOutletSalesUpdates());
  $stm->execute(array($id));

  $json = array(
    "status"=>200
  );

  echo json_encode($json);

?>
