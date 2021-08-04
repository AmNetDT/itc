<?php 

  ini_set('max_execution_time', 0);
	require '../../dbconfig/db.php';
	require '../../query/users.php';
	
	$db   = new db();
  $conn = $db->connect();
  
	$depots_u_id = $_POST['depots_u_id'];
	$region_u_i = $_POST['region_u_i'];
	$competion_name = $_POST['competion_name'];
  $competion_code =  generate_string();
  
  $stm = $conn->prepare (DbQuery::createCompetitionBrands());
  $stm->execute(array($competion_name, $competion_code, $region_u_i,$depots_u_id));
  $row = $stm->fetch();

  $st = $conn->prepare (DbQuery::FetchInsertedCompetition());
  $st->execute(array($row['id']));
  $ro = $st->fetch();

  $rid = $row['id'];
  $rregion = $ro['region'];
  $rdepot = $ro['depots'];

  $data = "
  <tr id='$rid'  class='rowOdd clickModuleCompition clickModuleCompition$rid'>
  <td>$competion_code</td>
  <td>$competion_name</td>
  <td>$rregion</td>
  <td>$rdepot</td>
  <td id='type1'><button class='dlete_mod_remove_comptition dlete_mod_competition$rid' id='$rid'>Delete</button></td>
  </tr>
  ";

  $json =array(
    "status"=>200,
    "data"=> $data
  );
  echo json_encode($json);
?>

<?php 

function generate_string(){
  $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $strength = 16;
  $input_length = strlen($input);
  $random_string = '';
  for($i = 0; $i < $strength; $i++) {
      $random_character = $input[mt_rand(0, $input_length - 1)];
      $random_string .= $random_character;
  }
  return $random_string;
}

?>