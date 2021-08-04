<?php 
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

  $db   = new db();
  $conn = $db->connect();
 
    $outletid = $_POST['outletid'];
    $count = count($outletid);

    for($i = 0; $i < $count; $i++){

      $explode = explode('~',$outletid[$i]);
      $stm = $conn->prepare (DbQuery::getAllOutletForPermissionUpdate());
      $stm->execute(array($explode[1],$explode[0]));
      $rows = $stm->fetch();
	  
      if($i==$count-1){

        $json =array(
          "status"=>200,
          "msg"=>"Successfully Save"
        );

        echo json_encode($json);
        break;
        
      }
    }


?>
