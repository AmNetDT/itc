<?php 

  ini_set('max_execution_time', 0);
	require '../../dbconfig/db.php';
	require '../../query/users.php';
	
	$db   = new db();
  $conn = $db->connect();
  
	$id = $_POST['id'];

  
  $stm = $conn->prepare (DbQuery::RemoveCompetition());
  $stm->execute(array($id));

  $json =array(
    "status"=>200
  );

  echo json_encode($json);
?>