<?php 

  ini_set('max_execution_time', 0);
	require '../../dbconfig/db.php';
	require '../../query/users.php';
	
	$db   = new db();
  $conn = $db->connect();
  
  $depots_u_id = $_POST['depots_u_id'];
  $rcompetition_u_i = $_POST['competition_u_id'];
  $dates =  date('Y-m-d');
  $time = date("H:i:s"); 


  $stm = $conn->prepare (DbQuery::createCompetitionBrands());
  $stm->execute(array($depots_u_id,$rcompetition_u_i, $dates, $time ));
  $row = $stm->fetch();

  $stmm = $conn->prepare(DbQuery::currentCompetition());
  $stmm->execute(array($row['id']));
  $rowd = $stmm->fetch();

  $brandcode = $rowd['skucode'];
  $brandname = $rowd['skuname'];
  $depotname = $rowd['depotname'];
  $state = $rowd['statename'];
  $region = $rowd['regionname'];
  $rid =  $row['id'];

  $data = "
  <tr id='$rid'  class='rowOdd clickModuleCompition clickModuleCompition$rid'>
  <td>$brandcode</td>
  <td>$brandname</td>
  <td>$depotname</td>
  <td>$state</td>
  <td>$region</td>
  <td id='type1'><button class='dlete_mod_remove_comptition dlete_mod_competition$rid' id='$rid'>Delete</button></td>
  </tr>";

  $json =array(
    "status"=>200,
    "data"=>  $data
  );

  echo json_encode($json);
?>