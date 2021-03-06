<?php
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db();
$conn = $db->connect();

?>
<?php
//fetch the information
$stm = $conn->prepare(DbQuery::fetchBasket());
$stm->execute(array($_POST['id']));
$rows = $stm->fetch();

$st = $conn->prepare(DbQuery::updateFetchBasket());
$st->execute(array(
  $rows['outletclassid'], $rows['outletlanguageid'], $rows['outlettypeid'], $rows['outletname'],
  $rows['outletaddress'], $rows['contactname'], $rows['contactphone'], $rows['latitude'], $rows['longitude'], $rows['urno'], $rows['urno']
));

$json = array(
  "status" => 200
);

echo json_encode($json);

?>