<?php
ini_set('max_execution_time', 0);
require '../dbconfig/db.php';
require '../query/users.php';

 process();

?> 

<?php 
 function process() {
  
        $dates = date('Y-m-d');

        $sql = 
        "insert into mt_daily_sales (customer_code,employee_id,product_code,product_name,qty, entry_date  )
        (select b.customer_code, a.employee_id, a.product_code,a.product_name, cast(SUM(a.qtyroll+(a.qtypack::NUMERIC/10)) as numeric(10,1)) as qty,?
        from reports a, employees b
        where a.entry_date = ?
        and product_code <> ''
        and a.employee_id = b.id
        group by a.employee_id, a.product_code, a.product_name, b.customer_code)
        ";
   
        $db   = new db();
        $conn = $db->connect();

        $stm = $conn->prepare($sql);
        $stm->execute(array($dates,$dates)); 
        
 }
?>

