<?php 
ini_set('max_execution_time', 0);
	require '../../dbconfig/db.php';
	require '../../query/users.php';
	
	$db   = new db();
	$conn = $db->connect();
  
?>
<?php

 
    $st = $conn->prepare(DbQuery::getUserIssuesId());
    $st->execute(array($_POST['id']));
    $datarows = $st->fetch();

    $stmm = $conn->prepare(DbQuery::updateIntoActionPlan());
    $stmm->execute(array($_POST['mActions'], $_POST['mActions'], $_POST['id']));
    $stmm->fetch();

    $date = date('Y-m-d');
    $time = date('h:m:s');
    $stm = $conn->prepare (DbQuery::insertIntoActionPlan());
    $stm->execute(array($datarows['id'] ,$_POST['mActions'], $date,$time));
    $rows = $stm->fetch();


    $json =array(
     "status"=>200
    );

    echo  json_encode($json);
?>