<?php 
ini_set('max_execution_time', 0);
	require '../../dbconfig/db.php';
	require '../../query/users.php';
	
	$db   = new db();
	$conn = $db->connect();
  
?>
<?php 
  
    $date = date('Y-m-d');
    $time = date('h:m:s');
    $stm = $conn->prepare (DbQuery::insertIntoEmpIssues());
    $stm->execute(array($_POST['id'],$_POST['mIssues'],$date,$time));
    $rows = $stm->fetch();

    $json =array(
     "status"=>200
    );

    echo  json_encode($json);

?>