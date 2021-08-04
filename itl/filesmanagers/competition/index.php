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

<div id="accounttile">Competition Brands<span id="close"><img src="filesmanagers/jlib/cancel_icon.png"  /></span></div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div  class="dialog"  id="d11">
<div id="indidual_general">
<div id="uppers">
<form class="add_competition_to_users">
<table width="485" border="0" cellpadding="0" cellspacing="0" style="margin-left:70px; width:550px;">
  


    <tr>
    <td width="112"><div id="inputName" style="text-align:left">Competition Brand Name:</div></td>
    <td><div id="formInputs">
      <input name="competion_name" type="text" value="" id="competion_name" class="drclear"  style='width:210px;'/>
    </div></td>
    </tr>


    <tr>
    <td width="200"><div id="inputName" style="text-align:left">Region:</div></td>
    <td>
    
    <div id="formInputs">
      <select name="region_u_i" id="region_u_i">
		<?php 
        if($syscat['syscategory_id']==3){
			$vehicle = $conn->prepare (DbQuery::getIndividualRegion());
			$vehicle->execute(array($region_id));	
        }else if($syscat['syscategory_id']==1){
			$vehicle = $conn->prepare (DbQuery::getAllRegion());
			$vehicle->execute();
        }else if($syscat['syscategory_id']==4){
			$vehicle = $conn->prepare (DbQuery::getIndividualRegion());
			$vehicle->execute(array($region_id));
        }
        while($vresult = $vehicle->fetch()){
        ?>
          <option value="<?php echo $vresult['id']?>"><?php echo $vresult['name']?></option>
          <?php 
        }
        ?>
        </select>
    </div>
    
    </td>
    </tr>



    <tr>
    <td width="200"><div id="inputName" style="text-align:left">Location:</div></td>
    <td>
    
    <div id="formInputs">
      <select name="depots_u_id" id="depots_u_id">
        <?php 
		
		if($syscat['syscategory_id']==3){
			$stm = $conn->prepare (DbQuery::getDepots());
	  		$stm->execute(array($region_id));
		}else if($syscat['syscategory_id']==1){
			$stm = $conn->prepare (DbQuery::getDepotAdmin());
	  		$stm->execute();
		}else if($syscat['syscategory_id']==4){
			$stm = $conn->prepare (DbQuery::getDepotSupervisor());
	  		$stm->execute(array($depots_id));
		}
	  
	  while($result = $stm->fetch()){
	   ?>
        <option value="<?php echo $result['id']?>"><?php echo $result['name'] ?></option>
    <?php 
	   }
	?>
      </select>
    </div>
    
    </td>
    </tr>


</table>
<div id="butoss" style=" margin-left:70px; margin-top:30px;"><button class="r_addcompetition"> Add </button> 
</form>
 </div>

 <table border="1" style="background:#F7F7F3; width:800px; margin-left:70px;">
  <tr>
    <td width="299" align="left" valign="top">
      <div id="table_results" style="width:800px;">
        <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:800px;">
          <thead>
            <tr>
              <th width="146"><div id="datatableColcontent">Brand Code</div></th>
              <th width="257"><div id="datatableColcontent">Brand Name</div></th>
              <th width="257"><div id="datatableColcontent">Region</div></th>
              <th width="257"><div id="datatableColcontent">Location</div></th>
              <th width="81"><div id="datatableColcontent"></div></th>
              </tr>
            <tr  id="d" class="rowEven"></tr>
             <thead> 
             <tbody class="include_table_data">     
			<?php 
            $modules = $conn->prepare(DbQuery::FetchCompetition());
            $modules->execute(array($region_id));
            while($vresult = $modules->fetch()) {
            ?>
            <tr id="<?php echo $vresult['id'] ?>"  class="rowOdd clickModuleCompition clickModuleCompition<?php echo $vresult['id'] ?>">
              <td><?php echo $vresult['product_code'] ?></td>
              <td><?php echo $vresult['productname'] ?></td>
              <td><?php echo $vresult['region'] ?></td>
              <td><?php echo $vresult['depots'] ?></td>
              <td id="type1"><button class="dlete_mod_remove_comptition dlete_mod_competition<?php echo $vresult['id'] ?>" id="<?php echo $vresult['id'] ?>">Delete</button></td>
            </tr>
            <?php 
			}
			?>
            
            
            </tbody>
          </table>
        </div>
    </td>
  </tr>
</table>
</div>
</div>



</div>




