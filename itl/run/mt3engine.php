<?php
ini_set('max_execution_time', 0);
set_time_limit(0);
require '../dbconfig/db.php';
require '../query/users.php';

switch (daysofthemonth()) {
    case 1:
        process(1);
        break;
    case 2:
        process(2);
        break;
    case 3:
        process(3);
        break;
    case 4:
        process(4);
        break;
    case 5:
        process(5);
        break;
}
?> 

<?php 
 function process($weeks){

   $t =  date('d-m-Y');
   $days = strtolower(date("w",strtotime($t)))+1;

    if($days==1) {
        $sql = "
        select b.employee_id, b.outlet_id
        from employee_recycle a, employee_outlet b
        where a.employee_outlets_id = b.id
        and a.week = ? and a.sun = ? and b.status =  '1'";
    }else if($days==2) {
        $sql = "
        select b.employee_id, b.outlet_id 
        from employee_recycle a, employee_outlet b
        where a.employee_outlets_id = b.id
        and a.week = ? and a.mon = ? and b.status =  '1'";
    }else if($days==3) {
        $sql = "
        select b.employee_id, b.outlet_id from employee_recycle a, employee_outlet b
        where a.employee_outlets_id = b.id
        and a.week = ? and a.tue = ? and b.status =  '1'";
    }else if($days==4) {
        $sql = "
        select b.employee_id, b.outlet_id from employee_recycle a, employee_outlet b
        where a.employee_outlets_id = b.id
        and a.week = ? and a.wed = ? and b.status =  '1'";
    }else if($days==5) {
        $sql = "
        select b.employee_id, b.outlet_id from employee_recycle a, employee_outlet b
        where a.employee_outlets_id = b.id
        and a.week = ? and a.thur = ? and b.status =  '1'";
    }else if($days==6) {
        $sql = "
        select b.employee_id, b.outlet_id 
        from employee_recycle a, employee_outlet b
        where a.employee_outlets_id = b.id
        and a.week = ? and a.fri = ? and b.status =  '1'";
    }else if($days==7) {
        $sql = "
        select b.employee_id, b.outlet_id from employee_recycle a, employee_outlet b
        where a.employee_outlets_id = b.id
        and a.week = ? and a.sat = ? and b.status =  '1'";
    }

        $m =  date('Y-m-d');
   
        $db   = new db();
        $conn = $db->connect();

        $stm = $conn->prepare($sql);
        $stm->execute(array($weeks,$days)); 
        while($stmp = $stm->fetch()) {
           $st = $conn->prepare("select count(id) as counts from sales_route_plan where employee_id = ? and outlet_id = ? and visit_date = ?");
           $st->execute(array($stmp['employee_id'],$stmp['outlet_id'],$m)); 
           $s = $st->fetch();
           if($s['counts']=='0'){
                $it = $conn->prepare("insert into sales_route_plan (employee_id, outlet_id, visit_date, distance_from_depot) values (?,?,?,'0.0')");
                $it->execute(array($stmp['employee_id'],$stmp['outlet_id'],$m)); 
           }
        }
 }
?>

<?php 
function daysofthemonth()
{
    $t =  date('d-m-Y');
    $dayName = strtolower(date("D",strtotime($t)));
    $dayNum = strtolower(date("d",strtotime($t)));
    return  floor(($dayNum - 1) / 7) + 1;
}
?>