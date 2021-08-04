<?php
ini_set('max_execution_time', 0);
require '../dbconfig/db.php';
require '../query/users.php';

 process();

?> 

<?php 
 function process() {
  
       $dates = date('Y-m-d');
       $distanceHolder = 0;

       $sql = "select employee_id, distance, entry_date from employee_visited_outlet
       where distance<>'' 
       and entry_date = ?";

       $db   = new db();
       $conn = $db->connect();

       $stm = $conn->prepare($sql);
       $stm->execute(array($dates)); 

       while($res = $stm->fetch()) {

              $distance = $res['distance'];

              if($distance!=='') {

                     $sept = explode(' ',$distance);

                     if(@$sept[1]=='m') {
                         $distanceHolder = @$sept[0]/1000;   
                     }else {
                         $distanceHolder = @$sept[0];
                     }
                     $insert = "insert into employee_daily_distance (employee_id, distance, entry_date) values (?,?,?)";
                     $st = $conn->prepare($insert);
                     $st->execute(array($res['employee_id'], $distanceHolder ,$res['entry_date'])); 
              }
       }
 }
?>

