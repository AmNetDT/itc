<?php 
    require '../../dbconfig/db.php';
    require '../../query/users.php';
    $db   = new db();
    $conn = $db->connect();
    $id = $_POST['id'];
    $date =  date('Y-m-d');
?>

<div style="height:500px;">
  <table width="1000" border="1">
    <tbody>
      <tr>
        <th width="300" align="left" valign="top" scope="col">
			
			<div style="height: 600px; width: auto; overflow: scroll;">
			
			<table width="600" class="datatable" id="genericTableFormtable" style="width:300px;" summary="System Resources">
          <tr>
            <th><div id="datatableColcontent">S/N</div></th>
            <th width="181" id="datatableColcontent">Ed Code</th>
            <th width="62" id="datatableColcontent">Rep Name </th>
            </tr>
            <?php 
    $sn = 0; 
    $stm = $conn->prepare(DbQuery::allTmSalesReps());
    $stm->execute(array($id));
    while($stmp = $stm->fetch()){
    $sn++;
?>
          <tr id="tr"  class="rowOdd btn_tm_outlets_fetch_all rst" lang="<?php echo $stmp['employeeid'] ?>" eng="<?php echo $stmp['employeeid'] ?>" >
            <td width="41"><?php echo $sn ?></td>
            <td width="62"><?php echo $stmp['employee_code'] ?></td>
            <td width="250"><?php echo $stmp['name'] ?></td>
          </tr>
          <?php 
		}
	?>
        </table>
			</div>
		  </th>
        <th width="904" align="left" valign="top" scope="col" id="fetch_here_token">
			
		</th>
      </tr>
    </tbody>
  </table>
</div>