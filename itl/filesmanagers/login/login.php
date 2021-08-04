<?php session_start() ;?>
<?php 

    require '../../dbconfig/db.php';
    require '../../query/users.php';
    ini_set('max_execution_time', 0);

    $db   = new db();
    $conn = $db->connect();

    $users = $_POST['users'];
    $pass = $_POST['pass'];

    $stmt = $conn->prepare (DbQuery::userLoginAuth());
    $stmt->execute(array($users,$pass));
    $row = $stmt->fetch();

    if($row['id'] =="") {
        $json =array(
            "status"=>400,
            "msg"=>"Please enter valid user login credential"
        );
    }else{
        $_SESSION['NTY3ODk3NDM0NTY3ODkw'] = $row['id'];
        $json =array(
            "status"=>200,
            "url"=>"console"
        );
    }

    echo json_encode($json);


?>