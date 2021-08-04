<?php
ini_set('max_execution_time', 0);
require '../dbconfig/db.php';
require '../query/users.php';

 process();

?> 

<?php 
 function process() {
  
       $dates = date('Y-m-d');

       $sql = "select a.distance, b.id as employee_id,  b.region_id as region, b.depots_id as location, 
       b.vehicle_id as vehicle, c.cr_in_km, d.amount_per_litre
       from daily_total_distance_cover a, employees b, fuel_consumption_rate c, fuel_float d
       where a.employee_id = b.id
       and c.vehicle_id = b.vehicle_id
       and cast(d.locations as integer) = b.depots_id
       and cast(d.region as integer) = b.region_id
       and a.entry_date = ?";

       $db   = new db();
       $conn = $db->connect();

       $stm = $conn->prepare($sql);
       $stm->execute(array($dates)); 

       while($res = $stm->fetch()) {

            $amount = ($res['distance']/$res['cr_in_km'])*$res['amount_per_litre'];
              
            $insert = "insert into daiy_fuel_consumption_amount (employee_id, vehicle_id, cr_in_km, distance_in_km, amount, entry_date   ) values (?,?,?)";
            $st = $conn->prepare($insert);
            $st->execute(array($res['employee_id'],$res['vehicle'], $res['cr_in_km'], $res['cr_in_km'], $res['distance'], 
            $amount ,$dates));
              
       }
 }
?>


