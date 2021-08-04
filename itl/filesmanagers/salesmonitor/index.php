<?php session_start() ;?>
<?php 

ini_set('max_execution_time', 0);
    require '../../dbconfig/db.php';
	  require '../../query/users.php';
	
    $db   = new db();
    $conn = $db->connect();
    $users_id = $_SESSION['NTY3ODk3NDM0NTY3ODkw'];
    
    $date =  date('Y-m-d');
	
	  $sys = $conn->prepare (DbQuery:: UserCategotyAndPriv());
    $sys->execute(array($users_id));
    $syscat = $sys->fetch();
	  $region_id = $syscat['region_id'];
	  $depots_id = $syscat['depots_id'];
	
?>


<div id="body_general">

<div id="accounttile">Daily Sales Monitor<span id="close"><img src="filesmanagers/jlib/cancel_icon.png"  /></span></div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:100%;">

    <tr>
      <th><div id="datatableColcontent">S/N</div></th>
      <th width="235" id="datatableColcontent">ED code</th>
      <th width="350" id="datatableColcontent">Name</th>
      <th width="294" id="datatableColcontent">Depot</th>
      <th width="176" id="datatableColcontent">Planned Outlet</th>
      <th width="176" id="datatableColcontent">Actual Visit</th>
    </tr>
   
	<?php 
		$sn = 0; 
		if($syscat['syscategory_id']==3) {
			$stm = $conn->prepare(DbQuery::sysMonitorListForSalesMonitor());
			$stm->execute(array($date,$region_id));
		}else if($syscat['syscategory_id']==1) {
			$stm = $conn->prepare(DbQuery::sysMonitorListForSalesMonitorAdmin());
			$stm->execute(array($date));
		}else if($syscat['syscategory_id']==4) {
			$stm = $conn->prepare(DbQuery::sysSupervisorList());
			$stm->execute(array($region_id,$depots_id));
		}
		while($stmp = $stm->fetch()){
		$sn++;
    ?>
    <tr id="<?php echo $stmp['id'] ?>"  class="rowOdd btn_customers_cards_cust_op
     rst<?php echo $stmp['id']?>" lang="<?php echo $stmp['fullname']." (".$stmp['ecode'].")" ?>"  >
    
      <td ><?php echo $sn ?></td>
      <td ><?php echo $stmp['ecode'] ?></td>
      <td ><?php echo $stmp['fullname'] ?></td>
      <td><?php echo $stmp['depots'] ?></td>
      <td><?php  echo $stmp['total_outlets']?></td>
      <td><?php  echo $stmp['actual_visit']?></td>
    </tr>
    <?php 
	 
		}
	?>
  
  </table>
          




