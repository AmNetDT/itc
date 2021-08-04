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
             select  a.employee_id,
             sum(CAST(a.qty::NUMERIC/b.qty::NUMERIC AS numeric(10,2))) as integrity, 
             sum(CAST(b.qty::NUMERIC-a.qty::NUMERIC AS numeric(10,2))) as variance, 
             sum(CAST((b.qty::NUMERIC-a.qty::NUMERIC) * 100 AS numeric(10,2))) as varianceper
             from mt_daily_sales a, dynamic_daily_sales b
             where a.customer_code = b.customerno
             and a.product_code = b.product_code
             and a.entry_date = b.entry_date
             and a.entry_date = ?
             group by a.employee_id
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

