<?php
ini_set('max_execution_time', 0);
require 'dbconfig/db.php';
require 'query/users.php';

 process();

?> 

<?php 
 function process() {
  
        $dates =  date('Y-m-d');

        $sql = "insert into daily_ovm(employee_id, ovm,  entry_date)
        (select employee_id ,sum(ovm::integer) as totalovm, entry_date
        from employee_visited_outlet 
        WHERE entry_date = ?
        and ovm <> ''
        group by employee_id, entry_date 
        )";
   
        $db   = new db();
        $conn = $db->connect();

        $stm = $conn->prepare($sql);
        $stm->execute(array($dates)); 
        
 }
?>

