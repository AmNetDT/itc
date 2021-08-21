<?php 
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';


$db   = new db();
$conn = $db->connect();

$routeid = $_POST['routeid'];
$monday =  isset($_POST['monday'])? $_POST['monday']:"T";
$tuesday = isset($_POST['tuesday']) ? $_POST['tuesday'] : "T";
// $wednesday = $_POST['wednesday'];
// $thusday = $_POST['thusday'];
// $friday = $_POST['friday'];
// $saturday = $_POST['saturday'];
// $sunday = $_POST['sunday'];
$map_ouelt_id = $_POST['map_ouelt_id'];
$user_id = $_POST['id'];


$sys = $conn->prepare(DbQuery::copymapoutletintooutlet());
$sys->execute(array($map_ouelt_id));
$lastInsertedId = $sys->fetch();
$urno = $lastInsertedId['id'];
$date = date('Y-m-d');


$array = array($monday, $tuesday);

for ($i=0; $i < count($array); $i++) {
	if($array[$i]!=="T"){
		$visit = $conn->prepare(DbQuery::createVisitDays());
		$visit->execute(array($urno, $routeid,$array[$i], $date));
	}

	if (count($array) == $i + 1) {
		$delvisit = $conn->prepare(DbQuery::deleteMapOut());
		$stm->execute(array($map_ouelt_id));
		
		$json = array(
			"status" => 200,
			"deleter"=>$map_ouelt_id ,
			"msg" => "Registration Successful"
		);
		echo json_encode($json);
		break;
	}
}




?>
