<?php 
    require '../../dbconfig/db.php';
    require '../../query/users.php';
    $db   = new db();
    $conn = $db->connect();
?>

<?php 
  
    $query = "update outlets set contactphone = ? where id = ?";
    $stm = $conn->prepare($query);
    $stm->execute(array($_POST['phoneno'],$_POST['urno']));
    $rows = $stm->fetch();

    $json =array(
     "status"=>200
    );
    
    echo  json_encode($json);
?>
