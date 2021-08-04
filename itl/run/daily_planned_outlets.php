<?php
ini_set('max_execution_time', 0);
require '../dbconfig/db.php';
require '../query/users.php';

 process();

?> 

<?php 
 function process() {
  
        $dates =  date('Y-m-d');

        $sql = 
        "insert into daily_planned_outlets(
        planned_outlet, employee_id, entry_date
        )
        (select count(id) as planoutlet, employee_id, visit_date
        from sales_route_plan 
        group by employee_id, visit_date
        having visit_date = ?)";
   
        $db   = new db();
        $conn = $db->connect();

        $stm = $conn->prepare($sql);
        $stm->execute(array($dates)); 
        
 }
?>

