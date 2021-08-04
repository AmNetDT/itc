<?php 

  ini_set('max_execution_time', 0);
  require '../../dbconfig/db.php';
  require '../../query/users.php';

  $db   = new db();
  $conn = $db->connect();

  $edcode = trim($_REQUEST['edcode']);
  $id = trim($_REQUEST['id']);

  $st = $conn->prepare (DbQuery::routeAndEdocdeCheckerCount());
  $st->execute(array($edcode));
  $ro = $st->fetch();

  if($ro['nam']=='0') {

    $json = array(
      "status"=>400,
      "msg"=>"  FAIL, Wrong Edcode",
      "name"=>''
    );
    #
  }else{

    $stm = $conn->prepare (DbQuery::routeAndEdocdeChecker());
    $stm->execute(array($edcode));
    $rows = $stm->fetch();

    $stmt = $conn->prepare (DbQuery::routeManagerUpdate());
    $stmt->execute(array($edcode, $id));
    $row = $stmt->fetch();
    
    $json = array(
      "status"=>200,
      "msg"=>"Completed",
      "name"=>$rows['nam']
    );
  }

  
   
  

 

  echo json_encode($json);
?>
