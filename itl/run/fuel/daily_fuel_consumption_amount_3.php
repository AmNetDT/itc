<?php
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

 process();

?> 

<?php 
 function process() {
  
       $dates = date('Y-m-d');

       $sql = "select a.distance, b.id as employee_id,  b.region_id as region, b.depots_id as location, 
       b.vehicle_id as vehicle, c.cr_in_km, d.amount_per_litre, 
       i.name as vehicle, j.name as depot, h.name as region, b.employee_code as edcode,
       concat(b.first_name, ' ', b.last_name) as repname
       from daily_total_distance_cover a, employees b, fuel_consumption_rate c, fuel_float d, vehicles i, depots j, regions h
       where a.employee_id = b.id
       and c.vehicle_id = b.vehicle_id
       and cast(d.locations as integer) = b.depots_id
       and cast(d.region as integer) = b.region_id
       and i.id = b.vehicle_id
       and b.depots_id = j.id
       and b.region_id = h.id
       and a.entry_date = ?";

       $db   = new db();
       $conn = $db->connect();

       $stm = $conn->prepare($sql);
       $stm->execute(array($dates)); 

       while($res = $stm->fetch()) {

            $amount = ($res['distance']/$res['cr_in_km'])*$res['amount_per_litre'];

            $insert = "insert into  daily_fuel_consumption_amount (employee_id, cr_in_km , distance_in_km,
             amount, entry_date, fuel_price) values (?,?,?,?,?,?)";
            $st = $conn->prepare($insert);
            $st->execute(array($res['employee_id'], $res['cr_in_km'], $res['distance'], $amount, $dates, $res['amount_per_litre'])); 
                        
       }
 }
?>
