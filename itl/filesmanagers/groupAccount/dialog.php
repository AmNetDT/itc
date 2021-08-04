<?php 
    require '../../dbconfig/db.php';
  require '../../query/users.php';
  ini_set('max_execution_time', 0);
	
    $db = new db();
    $conn = $db->connect();
	
	$sessions = 1168;
	$id = $_POST['id'];
	$userdetails = $conn->prepare(DbQuery::getUserDetailsForChange());
    $userdetails->execute(array($id));
	$rowResult = $userdetails->fetch();
	
?>

<div  class="dialog"  id="d11" >
  <div id="indidual_general">
<div id="uppers">
<form class="regSerlz">
<table width="1189" border="1" style="margin-left:30px;">
  <tr>
    <td width="180"><div id="inputName">First Name:</div></td>
    <td width="230"><div id="formInputs"><input name="first_name" type="text" id="first_name" value="<?php echo $rowResult['first_name'] ?>"/></div></td>
    <td width="267"><div id="inputName">User Name:</div></td>
    <td width="484" align="left"><div id="formInputs" style="height:25px;">
      <input name="username" type="text" class="setUsername" id="username" style=" float:left; margin-right:0px;" value="<?php echo $rowResult['username'] ?>" readonly/>
      <button style="padding:1px; float:left; margin-left:2px;" class="cusSet userSet"></button>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Middle Name:</div></td>
    <td><div id="formInputs"><input name="middle_name" type="text" id="middle_name" value="<?php echo $rowResult['middle_name'] ?>" /></div></td>
    <td><div id="inputName">Password:</div></td>
    <td align="left"><div id="formInputs" style="height:25px;">
      <input name="password" type="text" class="setPassword" id="password" style=" float:left; margin-right:0px;" value="<?php echo $rowResult['password'] ?>" readonly/>
      <button style="padding:1px; float:left; margin-left:2px;" class="cusSet passSet"></button>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Last Name:</div></td>
    <td><div id="formInputs">
      <input name="last_name" type="text" id="last_name" value="<?php echo $rowResult['last_name'] ?>" />
    </div></td>
    <td><div id="inputName">Account Status:</div></td>
    <td><div id="formInputs">
      <select name="user_status" id="user_status">
        <?php 
        $vehicle = $conn->prepare(DbQuery::getDeviceStatus());
        $vehicle->execute();
        while($vresult = $vehicle->fetch()){
        ?>
        <option value="<?php echo $vresult['id']?>"><?php echo $vresult['name']?></option>
        <?php 
         }
        ?>
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Region Db:</div></td>
    <td><div id="formInputs">
      <select name="dynamic_dbroute" id="dynamic_dbroute">
        <option value="1">South West</option>
        <option value="1">South East</option>
        <option value="1">North</option>
        <option value="1">Middle Belt</option>
        </select>
    </div></td>
    <td><div id="inputName">Depot:</div></td>
    <td><div id="formInputs">
      <select name="depots_id" id="depots_id">
        <?php 
	$stmt = $conn->prepare (DbQuery::getDepots());
	$stmt->execute(array($sessions));
	while($result = $stmt->fetch()){
	?>
        <option value="<?php echo $result['id']?>"><?php echo $result['name']." - ".$result['company'] ?></option>
        <?php 
	}
	?>
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Employee Code:</div></td>
    <td><div id="formInputs">
      <input name="employee_code" type="text" id="employee_code" value="<?php echo $rowResult['employee_code'] ?>" />
    </div></td>
    <td><div id="inputName">Business Unit:</div></td>
    <td><div id="formInputs">
      <select name="division_id" id="division_id">
        <?php 
        $vehicle = $conn->prepare(DbQuery::getVehicle());
        $vehicle->execute();
        while($vresult = $vehicle->fetch()){
        ?>
        <option value="<?php echo $vresult['id']?>"><?php echo $vresult['name']?></option>
        <?php 
        }
        ?>
      </select>
    </div></td>
    </tr>
  
  
    <tr>
      <td><div id="inputName">Customer Code: </div></td>
      <td><div id="formInputs">
        <input name="customer_code" type="text" id="customer_code" value="<?php echo $rowResult['customer_code'] ?>" />
      </div></td>
      <td><div id="inputName">Distribution Channel:</div></td>
      <td><div id="formInputs">
        <select name="vehicle_id" id="vehicle_id">
          <?php 
        $vehicle = $conn->prepare(DbQuery::getDivision());
        $vehicle->execute();
        while($vresult = $vehicle->fetch()){
        ?>
          <option value="<?php echo $vresult['id']?>"><?php echo $vresult['name']?></option>
          <?php 
         }
        ?>
        </select>
      </div></td>
    </tr>
  
  
  <tr>
    <td><div id="inputName">Sex:</div></td>
    <td><div id="formInputs">
      <select name="select">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
    </div></td>
    <td><div id="inputName">Device Brands:</div></td>
    <td><div id="formInputs">
      <select name="device_brands_id" id="device_brands_id">
        <?php 
        $vehicle = $conn->prepare(DbQuery::getDevicebrand());
        $vehicle->execute();
        while($vresult = $vehicle->fetch()){
        ?>
        <option value="<?php echo $vresult['id']?>"><?php echo $vresult['brand']." ".$vresult['model'] ?></option>
        <?php 
        }
        ?>
      </select>
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Phone:</div></td>
    <td><div id="formInputs">
      <input name="phone_no" type="text" id="phone_no" value="<?php echo $rowResult['phone_no'] ?>" />
    </div></td>
    <td><div id="inputName">Phone FA Code:</div></td>
    <td><div id="formInputs">
      <input name="phone_fa_code" type="text" id="phone_fa_code" value="<?php echo $rowResult['phone_fa_code'] ?>" />
    </div></td>
    </tr>
  <tr>
    <td><div id="inputName">Email:</div></td>
    <td><div id="formInputs">
      <input name="email" type="text" id="email" value="<?php echo $rowResult['email'] ?>" />
    </div></td>
    <td><div id="inputName">Bike FA Code:</div></td>
    <td><div id="formInputs">
      <input name="bike_fa_code" type="text" id="bike_fa_code" value="<?php echo $rowResult['bike_fa_code'] ?>" />
    </div></td>
    </tr>
    <tr>
      <td><div id="inputName">Phone imei:</div></td>
      <td><div id="formInputs">
        <input name="phone_imei" type="text" id="phone_imei" value="<?php echo $rowResult['phone_imei'] ?>" />
      </div></td>
      <td><div id="inputName">Bike Status:</div></td>
      <td><div id="formInputs">
        <select name="bike_staus_id" id="bike_staus_id">
          <?php 
        $vehicle = $conn->prepare(DbQuery::getDeviceStatus());
        $vehicle->execute();
        while($vresult = $vehicle->fetch()){
        ?>
          <option value="<?php echo $vresult['id']?>"><?php echo $vresult['name']?></option>
          <?php 
         }
        ?>
        </select>
      </div></td>
      </tr>
    <tr>
      <td><div id="inputName">Phone Status:</div></td>
      <td><div id="formInputs">
        <select name="phone_status" id="phone_status">
           <?php 
        $vehicle = $conn->prepare(DbQuery::getDeviceStatus());
        $vehicle->execute();
        while($vresult = $vehicle->fetch()){
        ?>
         <option value="<?php echo $vresult['id']?>"><?php echo $vresult['name']?></option>
        <?php 
         }
        ?>
        </select>
      </div></td>
      <td>&nbsp;</td>
      <td><input type="hidden" name="first_name" value="<?php echo $rowResult['first_name'] ?>"/></td>
    </tr>
    <tr>
      <td><div id="inputName">Depot Waiver:</div></td>
      <td><div id="formInputs">
        <select>
          <option value="">Waive depot</option>
          <option value="">Do not waive depot</option>
        </select>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
</table>
<br />
<div  style="margin-top:10px; margin-left:30px;">
  <button id="regBtn" ><img src="../../customerManagement/groupAccount/customerManagement/image/savebuttons.png" /> Save </button> 
 <button> <img src="../../customerManagement/groupAccount/customerManagement/image/reset.png" /> Reset </button ></div>
</form>
</div>