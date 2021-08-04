<?php 

  require '../../dbconfig/db.php';
	require '../../query/users.php';
	
  $db   = new db();
  $conn = $db->connect();
  $id = $_POST['id'];
  $date =  date('Y-m-d');

?>

<div style="height:500px;">
  <table width="1220" border="1">
    <tbody>
      <tr>
        <th width="300" align="left" valign="top" scope="col">
			
			<div style="height: 500px; width: auto; overflow: scroll;">
			
			<table width="496" class="datatable" id="genericTableFormtable" style="width:300px;" summary="System Resources">
          <tr>
            
            <th width="181" id="datatableColcontent">Sequence No</th>
            <th width="181" id="datatableColcontent">Outlet name</th>
            <th width="62" id="datatableColcontent">Urno </th>
            </tr>
          <?php 
		$sn = 0; 
		$stm = $conn->prepare(DbQuery::sysSupervisorSalesCustomers());
		$stm->execute(array($id,$date));
		while($stmp = $stm->fetch()){
		$sn++;
    ?>
          <tr id="tr"  class="rowOdd btn_cards_fetch_controllers rst" lang="<?php echo $stmp['employee_id'] ?>" eng="<?php echo $stmp['outlet_id'] ?>" >
           
            <td width="62"><?php echo $stmp['sequenceno']-1 ?></td>
            <td width="181"><?php echo $stmp['outletname'] ?></td>
            <td width="62"><?php echo $stmp['outlet_id'] ?></td>
            
            
          </tr>
          <?php 
		}
	?>
        </table>
			</div>
		  </th>
        <th width="904" align="left" valign="top" scope="col" id="fetch_here">
			
			
	  	  	
			
			
			
			
		</th>
      </tr>
    </tbody>
  </table>
</div>