<?php session_start() ;?>
<?php 
ini_set('max_execution_time', 0);
    require '../../dbconfig/db.php';
	require '../../query/users.php';
	
    $db   = new db();
    $conn = $db->connect();
	$users_id = $_SESSION['NTY3ODk3NDM0NTY3ODkw'];

	$date = date("Y-m-d");
	
	$sys = $conn->prepare (DbQuery::UserCategotyAndPriv());
    $sys->execute(array($users_id));
    $syscat = $sys->fetch();
	$region_id = $syscat['region_id'];
	$depots_id = $syscat['depots_id'];
	
	function getAssignedIssues($id,$conn,$date){
		$stm = $conn->prepare(DbQuery::getAppendedIssues());
		$stm->execute(array($id,$date));
		$stmp = $stm->fetch();
		return $stmp['name'];
	}
	
	function getAppendedIssuesId($id,$conn){
		$stm = $conn->prepare(DbQuery::getAppendedIssuesId());
		$stm->execute(array($id));
		$stmp = $stm->fetch();
		return $stmp['issues_id'];
	}
	
	function getActioPlanByName($id,$conn,$date){
		$stm = $conn->prepare(DbQuery::getActioPlanByName());
		$stm->execute(array($id,$date));
		$stmp = $stm->fetch();
		return $stmp['name'];
	}
	
	function getActioPlanByID($id,$conn){
		$stm = $conn->prepare(DbQuery::getActioPlanByID());
		$stm->execute(array($id));
		$stmp = $stm->fetch();
		return $stmp['id'];
	}
	
?>


<div id="body_general">

<div id="accounttile">User Issue <span id="close"><img src="filesmanagers/jlib/cancel_icon.png"  /></span></div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<select style="padding:2px; width:200px; margin-left:1px; margin-bottom:2px;" class="btn_status_action">
<option value="1">User Issue </option>
<option value="2">Action Plan</option>
</select>
<table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:100%;">

    <tr>
      <th><div id="datatableColcontent">S/N</div></th>
      <th width="146" id="datatableColcontent">ED code</th>
      <th width="451" id="datatableColcontent">Name</th>
      <th width="217" id="datatableColcontent">Area</th>
      <th width="225" id="datatableColcontent">Region</th>
      <th width="223" id="datatableColcontent">Depot</th>
      <th width="253" id="datatableColcontent">User Category</th>
      <th width="253" id="datatableColcontent">Issue</th>
      <th width="262" id="datatableColcontent">Action</th>
    </tr>
   
	<?php 
		$sn = 0;
		if($syscat['syscategory_id']==3){
			$stm = $conn->prepare(DbQuery::sysMonitorList());
			$stm->execute(array($region_id));
		}else if($syscat['syscategory_id']==1){
			$stm = $conn->prepare(DbQuery::sysAdminList());
			$stm->execute(array());
		}else if($syscat['syscategory_id']==4){
			$stm = $conn->prepare(DbQuery::sysSupervisorList());
			$stm->execute(array($region_id,$depots_id));
		}
		
		while($stmp = $stm->fetch()){
		$sn++;
    ?>
    <tr id="<?php echo $stmp['id'] ?>"  class="rowOdd btn_issue rst<?php echo $stmp['id']?>" lang="<?php echo $stmp['fullname']." (".$stmp['ecode'].") " ?>" 
    eng="<?php echo getActioPlanByID($stmp['id'],$conn) ?>" nig="<?php echo getAppendedIssuesId($stmp['id'],$conn) ?>" >
    
      <td width="87"><?php echo $sn ?></td>
      <td width="146"><?php echo $stmp['ecode'] ?></td>
      <td width="451"><?php echo $stmp['fullname'] ?></td>
      <td width="217"><?php echo $stmp['depots'] ?></td>
      <td width="225"><?php echo $stmp['regions'] ?></td>
      <td width="223"><?php echo $stmp['depots'] ?></td>
      <td width="223"><?php echo $stmp['syscat'] ?></td>
      <td width="253"><span id="myIssues<?php echo $stmp['id'] ?>"><?php echo getAssignedIssues($stmp['id'],$conn,$date);  ?></span></td>
      <td width="262"><span id="myaction<?php echo $stmp['id'] ?>"><?php echo getActioPlanByName($stmp['id'],$conn,$date);  ?></span></td>
    </tr>
    <?php 
		}
	?>
  
  </table>
          




