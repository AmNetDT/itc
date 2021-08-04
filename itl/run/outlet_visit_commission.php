<?php
ini_set('max_execution_time', 0);
require '../dbconfig/db.php';
require '../query/users.php';
process();
?> 

<?php 
 function process() {
  
       $dates = '2019-10-28';//date('Y-m-d');

       $sql = "
              select 
              a.employee_id,
              a.ovm, 
              ((a.ovm::integer*b.pervariance::integer)/100) as deduction, 
              (a.ovm::integer-((a.ovm::integer*b.pervariance::integer)/100)) as balance
              from daily_ovm a, mt_dynamic_daily_sales b
              where a.entry_date = b.entry_date
              and a.employee_id = b.employee_id
              and a.entry_date = ?
       ";

        $db   = new db();
        $conn = $db->connect();

        $stm = $conn->prepare($sql);
        $stm->execute(array($dates)); 

        while($res = $stm->fetch()) {

            $sqls = "insert into mt_dynamic_daily_sales(employee_id,  integrity, variance, pervariance, entry_date) values (?,?,?,?,?)";
            
            if($res['variance'] > 0){
                  $stmt = $conn->prepare($sqls);
                  $stmt->execute(array($res['employee_id'], $res['integrity'], $res['variance'], $res['varianceper'], $dates));
            }
        }
 }
?>

