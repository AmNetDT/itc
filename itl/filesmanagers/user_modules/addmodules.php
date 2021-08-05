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
    $lastId = $conn->lastInsertId('ingredients_id_seq');

    if($rows['counts']==0){

        $sm = $conn->prepare(DbQuery::insertIntoUserModule());
        $sm->execute(array($userid, $module_id, $date, $time));
        $sm->fetch();
        


        //get last auto increament from insert


        $json = array(
            "status" => 200,
            "msg" => "Module Successfully added".$lastId,
            "data"=> "<tr id='{}'  class='rowOdd clickModule clickModule{} '>
                <td></td>
                <td>Mobile</td>
                <td id='type1'><button class='' id=''>Delete</button></td>
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