<?php 
ini_set('max_execution_time', 0);
    require '../../dbconfig/db.php';
	require '../../query/users.php';
	
    $db   = new db();
    $conn = $db->connect();
	
	$id = $_POST['employee_id'];

?>


<div  class="dialog"  id="d11">
<div id="indidual_general">
<div id="uppers">
<form class="add_modules_to_users">
<table width="485" border="0" cellpadding="0" cellspacing="0" style="margin-left:70px; width:550px;">
  <tr>
    <td width="112"><div id="inputName" style="text-align:left">Module Name:</div></td>
    <td><div id="formInputs">
      <select name="module_id" >
      		<?php 
				$umodules = $conn->prepare(DbQuery::getAllAppModules());
				$umodules->execute();
				while($sresult = $umodules->fetch()){
            ?>
        		<option value="<?php echo $sresult['id']?>"><?php echo $sresult['name']?></option>
        	<?php 
			 }
			?>
      </select>
    </div></td>
    </tr>
    <tr>
    <td width="112"><div id="inputName" style="text-align:left">Channel:</div></td>
    <td><div id="formInputs">
      <select name="channel_id">
      		<?php 
				$umodules = $conn->prepare(DbQuery::getAllAppChannel());
				$umodules->execute();
				while($sresult = $umodules->fetch()){
            ?>
        		<option value="<?php echo $sresult['id']?>"><?php echo $sresult['name']?></option>
        	<?php 
			 }
			?>
      </select>
    <input type="hidden" value="<?php echo $id; ?>" name="employee_id"/></div></td>
    </tr>
</table>
<div id="butoss" style=" margin-left:70px; margin-top:30px;"><button class="r_addmodules"> Add </button> 
</form>
 </div>

 <table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; width:500px; margin-left:70px;">
  <tr>
    <td width="299" align="left" valign="top">
      <div id="table_results" style="width:500px;">
        <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:500px;">
          <thead>
            <tr>
              <th width="146"><div id="datatableColcontent">Model Name</div></th>
              <th width="257"><div id="datatableColcontent">Channel</div></th>
              <th width="81"><div id="datatableColcontent"></div></th>
              </tr>
            <tr  id="d" class="rowEven"></tr>
             <thead> 
             <tbody class="include_table">     
			<?php 
            $modules = $conn->prepare(DbQuery::getAllUserModules());
            $modules->execute(array($id));
            while($vresult = $modules->fetch()){
            ?>
            <tr id="$id"  class="rowOdd clickModule clickModule<?php echo $vresult['id'] ?>">
              <td><?php echo $vresult['na'] ?></td>
              <td id="name1" scope="row"><?php echo $vresult['ch'] ?></td>
              <td id="type1"><button class="dlete_mod_remove dlete_mod_rem<?php echo $vresult['id'] ?>" id="<?php echo $vresult['id'] ?>">Delete</button></td>
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

