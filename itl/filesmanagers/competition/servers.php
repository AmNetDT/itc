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

  // $st = $conn->prepare (DbQuery::FetchInsertedCompetition());
  // $st->execute(array($row['id']));
  // $ro = $st->fetch();

  // $rid = $row['id'];
  // $rregion = $ro['region'];
  // $rdepot = $ro['depots'];

  // $data = "
  // <tr id='$rid'  class='rowOdd clickModuleCompition clickModuleCompition$rid'>
  // <td>$competion_code</td>
  // <td>$competion_name</td>
  // <td>$rregion</td>
  // <td>$rdepot</td>
  // <td id='type1'><button class='dlete_mod_remove_comptition dlete_mod_competition$rid' id='$rid'>Delete</button></td>
  // </tr>
  // ";

  // $json =array(
  //   "status"=>200,
  //   "data"=> $data
  // );
  // echo json_encode($json);
?>