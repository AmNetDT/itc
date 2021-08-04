<?php 

    require '../../dbconfig/db.php';
	require '../../query/users.php';
	
    $db   = new db();
    $conn = $db->connect();
	
	$id = $_POST['id'];

?>

<?php 
      $dates =  date('Y-m-d');
      $days = strtolower(date("w",strtotime($dates)));
      $dateOfTheWeek = '';

        if($days==1){
            $dateOfTheWeek = 'mon';
        }else if($days==2){
            $dateOfTheWeek = 'tue';
        }else if($days==3){
            $dateOfTheWeek = 'wed';
        }else if($days==4){
            $dateOfTheWeek = 'thur';
        }else if($days==5){
            $dateOfTheWeek = 'fri';
        }else if($days==6){
            $dateOfTheWeek = 'sat';
        }else{
            $dateOfTheWeek = 'sun';
        };
?>

<div style="height:500px;">
  <table width="1220" border="1">
    <tbody>
      <tr>
        <th width="300" align="left" valign="top" scope="col">
			
			<div style="height: 500px; width: auto; overflow: scroll;">
			
			<table width="496" class="datatable" id="genericTableFormtable" style="width:300px;" summary="System Resources">
          <tr>
            <th><div id="datatableColcontent">S/N</div></th>
            <th width="181" id="datatableColcontent">Outlet name</th>
            <th width="62" id="datatableColcontent">Urno </th>
            </tr>
          <?php 
    $sn = 0; 
		$stm = $conn->prepare(DbQuery::getRepCustomers());
		$stm->execute(array($id, $dateOfTheWeek));
		while($stmp = $stm->fetch()){
		$sn++;
    ?>
          <tr id="tr"  class="rowOdd btn_cards_fetch rst" lang="<?php echo $stmp['urno'] ?>" >
            <td width="41"><?php echo $sn ?></td>
            <td width="181"><?php echo $stmp['outletname'] ?></td>
            <td width="62"><?php echo $stmp['urno'] ?></td>
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