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
    $userid = $_POST['employee_id'];
    $module_id = $_POST['module_id'];

   
    $stm = $conn->prepare(DbQuery::validateModule());
    $stm->execute(array($userid, $module_id));
    $rows = $stm->fetch();

    if($rows['counts']==0){


    $sm = $conn->prepare(DbQuery::insertIntoUserModule());
    $sm->execute(array($userid, $module_id, $date, $time));
    $rows = $sm->fetch();
    $lastInsertedId = $rows['id'];

    $smq = $conn->prepare(DbQuery::getLastInsertedModule());
    $smq->execute(array($lastInsertedId));
    $qresult = $smq->fetch();
    $modulename = $qresult['na'];

    $json = array(
            "status" => 200,
            "msg" => "Module Successfully",
            "data" => "<tr id='$lastInsertedId'  class='rowOdd clickModule clickModule$lastInsertedId'>
                <td> $modulename </td>
                <td>Mobile</td>
                <td id='type1'><button class='dlete_mod_remove dlete_mod_rem$lastInsertedId' id='$lastInsertedId'>Delete</button></td>
                </tr>"
        );

    }else{
        $json = array(
            "status" => 400,
            "msg" => "Modules select aready entered"
        );
    }

echo  json_encode($json);


?>