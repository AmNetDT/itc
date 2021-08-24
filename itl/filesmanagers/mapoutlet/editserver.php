<?php 
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';


$db   = new db();
$conn = $db->connect();

$routeid = $_POST['routeid'];
$monday =  isset($_POST['monday']) ? $_POST['monday'] : "T";
$tuesday = isset($_POST['tuesday']) ? $_POST['tuesday'] : "T";
$wednesday =  isset($_POST['wednesday']) ? $_POST['wednesday'] : "T";
$thusday = isset($_POST['thusday']) ? $_POST['thusday'] : "T";
$friday =  isset($_POST['friday']) ? $_POST['friday'] : "T";
$saturday = isset($_POST['saturday']) ? $_POST['saturday'] : "T";
$sunday = isset($_POST['sunday']) ? $_POST['sunday'] : "T";
$map_ouelt_id = $_POST['map_ouelt_id'];
$user_id = $_POST['id'];


$sys = $conn->prepare(DbQuery::copymapoutletintooutlet());
$sys->execute(array($map_ouelt_id));
$lastInsertedId = $sys->fetch();
$urno = $lastInsertedId['id'];
$date = date('Y-m-d');


$array = array($monday, $tuesday, $wednesday, $thusday, $friday, $saturday, $sunday);

for ($i=0; $i < count($array); $i++) {
	if($array[$i]!=="T"){
		$visit = $conn->prepare(DbQuery::createVisitDays());
		$visit->execute(array($urno, $routeid,$array[$i], $date));
	}

	if (count($array) == $i + 1) {
		$delvisit = $conn->prepare(DbQuery::deleteMapOut());
		$delvisit->execute(array($map_ouelt_id));
		
		$json = array(
			"status" => 200,
			"deleter"=>$map_ouelt_id,
			"msg" => "Registration Successful"
		);
		echo json_encode($json);
		break;
	}
}




?>
