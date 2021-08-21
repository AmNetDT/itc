<?php 
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';


$db   = new db();
$conn = $db->connect();

$routeid = $_POST['routeid'];
$monday = $_POST['monday'];
$tuesday = $_POST['tuesday'];
$wednesday = $_POST['wednesday'];
$thusday = $_POST['thusday'];
$friday = $_POST['friday'];
$saturday = $_POST['saturday'];
$sunday = $_POST['sunday'];
$map_ouelt_id = $_POST['map_ouelt_id'];
$user_id = $_POST['id'];


$sys = $conn->prepare(DbQuery::copymapoutletintooutlet());
$sys->execute(array($map_ouelt_id));
$lastInsertedId = $sys->fetch();
$urno = $lastInsertedId['id'];
$date = date('Y-m-d');

$array = array($monday, $tuesday, $wednesday, $thusday, $friday, $saturday, $sunday);
$json = "";

foreach ($array as $value) {

	$visit = $conn->prepare(DbQuery::createVisitDays());
	$visit->execute(array($urno, $routeid, $value, $date));

}

$json = array(
	"status" => $routeid,
	"msg" => "Registration Successful"
);

echo json_encode($json);


?>
