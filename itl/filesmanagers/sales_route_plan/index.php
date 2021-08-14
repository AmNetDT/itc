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

<div id="accounttile">Route Manager 

<span id="close"><img src="filesmanagers/jlib/cancel_icon.png"  /></span>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table class="datatable"  summary="System Resources" style="width:80%">

    <tr>
      <th><div id="datatableColcontent">S/N</div></th>
      <th width="500" id="datatableColcontent">Names</th>
      <th width="336" id="datatableColcontent">Route ID</th>
      <th width="294" id="datatableColcontent">Depots</th>
      <th width="500" id="datatableColcontent"></th>
    </tr>
   
	<?php 
		$sn = 0; 
		if($syscat['syscategory_id']==3) {
			$stm = $conn->prepare(DbQuery::routeManager());
			$stm->execute(array($region_id));
		}else if($syscat['syscategory_id']==1) {
			$stm = $conn->prepare(DbQuery::routeManagerAdmin());
			$stm->execute(array());
    }
    
		while($stmp = $stm->fetch()) {
		$sn++;
    ?>

    <tr id="<?php echo $stmp['id'] ?>"  class="rowOdd btn_manager_model rst<?php echo $stmp['id']?>" >
      <td><?php echo $sn ?></td>
      <td><div class="r_m_r_oute_mappers<?php echo $stmp['id'] ?>">  <?php echo $stmp['repname'] ?></div></td> 
      <td><?php echo $stmp['route_id'] ?></td>
      <td><?php echo $stmp['depotname'] ?></td>
      <td>
          <div >
            <input name="fname_i_u" type="text" id="fname_i_u" value="" style="width:80px; position:relative" class="et_t_b_m<?php echo $stmp['id']  ?>"  /> 
            <button class="route_regis_00023" id=<?php echo $stmp['id'] ?> >Assign</button> 
            <button class="route_regis_00023_78" id=<?php echo $stmp['id'] ?> >Unassign</button> 
          </div>
        </tr>
      </td>
    </tr>
    <?php 
		}
	?>
  
  </table>
          




