<?php session_start() ;?>

<?php 

  ini_set('max_execution_time', 0);
  require '../../dbconfig/db.php';
	require '../../query/users.php';
	
  $db   = new db();
  $conn = $db->connect();
	$users_id = $_SESSION['NTY3ODk3NDM0NTY3ODkw'];
	
	$sys = $conn->prepare (DbQuery:: UserCategotyAndPriv());
  $sys->execute(array($users_id));
  $syscat = $sys->fetch();
	$region_id = $syscat['region_id'];
	$depots_id = $syscat['depots_id'];
	
?>


<div id="body_general">

<div id="accounttile">Update Customer Mobile Number



<span id="close"><img src="filesmanagers/jlib/cancel_icon.png"  /></span>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table class="datatable"  summary="System Resources" style="width:80%">

    <tr>
      <th><div id="datatableColcontent">S/N</div></th>
      <th width="500" id="datatableColcontent">Urno</th>
      <th width="500" id="datatableColcontent">Customer Name</th>
      <th width="500" id="datatableColcontent">Rep Names</th>
      <th width="336" id="datatableColcontent">Region</th>
      <th width="294" id="datatableColcontent">Depots</th>
      <th width="294" id="datatableColcontent">Mobile Number</th>
      <th width="500" id="datatableColcontent"></th>
    </tr>
   
	<?php 
		$sn = 0; 
		if($syscat['syscategory_id']==3) {
			$stm = $conn->prepare(DbQuery::UpdateCustomersPhoneNumber());
			$stm->execute(array($region_id));
		}else if($syscat['syscategory_id']==1) {
			$stm = $conn->prepare(DbQuery::UpdateCustomersPhoneNumberAdmin());
			$stm->execute(array());
    }
    
		while($stmp = $stm->fetch()) {
		$sn++;
    ?>

    <tr id="<?php echo $stmp['id'] ?>"  class="rowOdd btn_manager_model_customers<?php echo $stmp['id']?> " >
      <td><?php echo $sn ?></td>

      <td><?php echo $stmp['urno'] ?></td>
      <td><?php echo $stmp['outletname'] ?></td>

      <td><div class="r_m_r_oute_mappers_customers<?php echo $stmp['id'] ?>">  <?php echo $stmp['repname'] ?></div></td> 
      <td><?php echo $stmp['region'] ?></td>
      <td><?php echo $stmp['depot'] ?></td>
      <td><?php echo $stmp['contactphone'] ?></td>
      <td>
          <div >
            <button class="customer_mobile_number_update_001" id=<?php echo $stmp['id'] ?> >Approve</button> 
          </div>
        </tr>
      </td>
    </tr>
    <?php 
		}
	?>
  
  </table>
          




