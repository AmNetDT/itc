<?php 
    require '../../dbconfig/db.php';
    require '../../query/users.php';
    $db   = new db();
    $conn = $db->connect();
    $employee_id = $_POST['employee_id'];
    $myTodayOutlet = $_POST['myTodayOutlet'];
    $date =  date('Y-m-d');
?>

<div style=" width: 700px; height: 450px;">
<table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:100%;">
<tr>
    <th width="62" id="datatableColcontent">S/N</th>
    <th width="62" id="datatableColcontent">Outlet URNO</th>
    <th width="300" id="datatableColcontent">Outlet Name</th>
    <th width="30" id="datatableColcontent">Visit Sequence</th>

</tr>
<?php 
    $sn = 0; 
    $stm = $conn->prepare(DbQuery::getAllTodayOutlet());
    $stm->execute(array($employee_id, $myTodayOutlet));
    while($stmp = $stm->fetch()){
    $sn++;
?>
<tr id="tr"  class="rowOdd" >
    <td><?php echo $sn ?></td>
    <td><?php echo $stmp['urno'] ?></td>
    <td><?php echo $stmp['outletname'] ?></td>
    <td><?php echo $stmp['seq'] ?></td>
</tr>
<?php 
    }
?>
</table>
</div>
