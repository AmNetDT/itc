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
<div id="accounttile">TM Token Manager<span id="close"><img src="filesmanagers/jlib/cancel_icon.png"  /></span></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:100%;">
    <tr>
      <th><div id="datatableColcontent">S/N</div></th>
      <th width="235" id="datatableColcontent">ED code</th>
      <th width="350" id="datatableColcontent">Name</th>
      <th width="294" id="datatableColcontent">Region</th>
      <th width="176" id="datatableColcontent">Depot</th>
    </tr>
	<?php 
    $sn = 0; 
    
		if($syscat['syscategory_id']==3) {
			$stm = $conn->prepare(DbQuery::sysMonitorListForSalesMonitors());
			$stm->execute(array($region_id));
		}else if($syscat['syscategory_id']==1) {
			$stm = $conn->prepare(DbQuery::sysMonitorListForSalesMonitorAdmins());
			$stm->execute(array());
    }
    
		while($stmp = $stm->fetch()){
		$sn++;
    ?>
    <tr id="<?php echo $stmp['id'] ?>"  class="rowOdd btn_customers_cards_cust_op_tokens rst<?php echo $stmp['id']?>" lang="<?php echo $stmp['fullname']." (".$stmp['ecode'].")" ?>"  >
      <td ><?php echo $sn ?></td>
      <td ><?php echo $stmp['ecode'] ?></td>
      <td ><?php echo $stmp['fullname'] ?></td>
      <td><?php echo $stmp['regions'] ?></td>
      <td><?php echo $stmp['depots'] ?></td>
    </tr>
    <?php 
		}
	?>
  </table>
          




