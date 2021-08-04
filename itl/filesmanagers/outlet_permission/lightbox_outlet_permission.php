<?php 
ini_set('max_execution_time', 0);
    require '../../dbconfig/db.php';
	require '../../query/users.php';
	
    $db   = new db();
    $conn = $db->connect();

	$id = $_POST['id'];

?>

<div style="height:400px;">

<table width="200" border="0" style="width:600px;">
  <tr>
    <td width="405">
    <div id="btn_c"><button class="btn_permit_01"><img src="endofperiod/image/savebuttons.png" /> Save </button> </div></td>
    <td width="185"><div style="text-align:right;font-family:Tahoma, Geneva, sans-serif;font-size: 12px;">Check/Uncheck All 
    <input type="checkbox" class="chkll_permits" /></div></td>
  </tr>
</table>

<table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:600px;">

    <tr>
      <th><div id="datatableColcontent">S/N</div></th>
      <th width="273" id="datatableColcontent">Outlet name</th>
      <th width="100" id="datatableColcontent">Urno </th>
      <th width="141" id="datatableColcontent">Cuastomer no</th>
      <th width="25" id="datatableColcontent">&nbsp;</th>
    </tr>
   
	<?php 
		$sn = 0; 
		$stm = $conn->prepare(DbQuery::getAllOutletForPermission());
		$stm->execute(array($id));
		while($stmp = $stm->fetch()){
		$sn++;
    ?>
    <tr id=""  class="rowOdd btn_update_permit rttp"  >
    
      <td width="37"><?php echo $sn ?></td>
      <td width="273"><?php echo $stmp['outletname'] ?></td>
      <td width="100"><?php echo $stmp['urno'] ?></td>
      <td width="141"><?php echo $stmp['customerno'] ?></td>
      
      <td width="25">
      	<input 
		<?php if (!(strcmp('true',$stmp['outlet_waiver']))) {echo "checked=\"checked\"";} ?> type="checkbox" value="<?php echo $stmp['id'] ?>" 
        class="permitOutlet<?php echo $sn ?> permit_all_checks"  />
        <input type="hidden" value="<?php echo $stmp['outlet_waiver'] ?>" class="rg_q<?php echo $sn  ?>" />
      </td>

    </tr>
    <?php 
		}
	?>
  </table>
  <input type="hidden" value="<?php echo $sn; ?>" class="counts_permission"  />
  <div id="btn_c"><button class="btn_permit_02"><img src="endofperiod/image/savebuttons.png" /> Save </button> </div>
</div>