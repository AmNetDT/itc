<?php session_start(); ?>
<?php
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db();
$conn = $db->connect();
$users_id = $_SESSION['NTY3ODk3NDM0NTY3ODkw'];

$sys = $conn->prepare(DbQuery::UserCategotyAndPriv());
$sys->execute(array($users_id));
$syscat = $sys->fetch();
$region_id = $syscat['region_id'];
$depots_id = $syscat['depots_id'];


$estm = $conn->prepare(DbQuery::usersEditableInfo());
$estm->execute(array($users_id));
$e_result = $estm->fetch();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>

<body>
  <form class="reg_Serialise_i">
    <div style="margin:auto; height:470px; margin-left:30px;">
      <table width="688">
        <tr>
          <td width="330" align="left" valign="top">
            <div style="border-bottom: solid 1px #E5E5E5;width:283px; margin-bottom:10px;font-family:Arial, Helvetica, sans-serif;
 font-size:13px;
 font-weight:bold;
 padding:2px; 
 color:#224889;">Personal Information</div>
            <table width="418" border="0" style="width:350px;">
              <tr>
                <td>
                  <div id="inputName">Fullname:</div>
                </td>
                <td>
                  <div id="formInputs">
                    <input name="fullname" type="text" value="" id="fullname" class="l_name drclear" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div id="inputName">Staff Code:</div>
                </td>
                <td>
                  <div id="formInputs">
                    <input name="edcode_u_i" type="text" value="<?php echo $e_result['employee_code'] ?>" id="edcode_u_i" class="e_codes drclear" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div id="inputName">Sex:</div>
                </td>
                <td>
                  <div id="formInputs">
                    <select name="sex_u_i" id="sex_u_i">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div id="inputName">Phone Number:</div>
                </td>
                <td>
                  <div id="formInputs">
                    <input name="phoneno_u_i" type="text" value="" id="phoneno_u_i" class="drclear" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div id="inputName">Email:</div>
                </td>
                <td>
                  <div id="formInputs">
                    <input name="email_u_i" type="text" value="" id="email_u_i" class="drclear" />
                  </div>
                </td>
              </tr>
            </table>
    </div>
    <div style="border-bottom: solid 1px #E5E5E5;width:283px; margin-bottom:10px;font-family:Arial, Helvetica, sans-serif;
 font-size:13px;
 font-weight:bold;
 padding:2px; 
 color:#224889; margin-top:20px;">Device</div>
    <table width="418" border="0" style="width:350px;">
      <tr>
        <td width="157">
          <div id="inputName">Phone FA Code:</div>
        </td>
        <td width="251">
          <div id="formInputs"><input name="phonefacode_u_i" type="text" id="phonefacode_u_i" value="" class="drclear" /></div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="inputName">Bike FA Code:</div>
        </td>
        <td>
          <div id="formInputs">
            <input name="bikefacode_u_i" type="text" value="" id="bikefacode_u_i" class="drclear" />
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="inputName">Phone Imei:</div>
        </td>
        <td>
          <div id="formInputs">
            <input name="phoneimie_u_i" type="text" value="" id="phoneimie_u_i" class="i_mei drclear" />
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div id="inputName">Device Brands:</div>
        </td>
        <td>
          <div id="formInputs">
            <select name="devicebrands_u_i" id="devicebrands_u_i">
              <?php
              $vehicle = $conn->prepare(DbQuery::getDevicebrand());
              $vehicle->execute();
              while ($vresult = $vehicle->fetch()) {
              ?>
                <option value="<?php echo $vresult['id'] ?>"><?php echo $vresult['brand'] . " " . $vresult['model'] ?></option>
              <?php
              }
              ?>
            </select>
          </div>
        </td>
      </tr>
    </table>
    <div id="btn_c" style="margin-top:60px; margin-bottom:30px;">
      <input type="hidden" value="1" class="insert_hidden_i" />
      <button class="btn_regis_01"><img src="endofperiod/image/savebuttons.png" /> Save </button>
    </div>
    </td>
    <td width="346" align="left" valign="top">
      <div style="border-bottom: solid 1px #E5E5E5;width:290px; margin-bottom:10px;font-family:Arial, Helvetica, sans-serif;
 font-size:13px;
 font-weight:bold;
 padding:2px; 
 color:#224889;">Official Information</div>
      <table width="418" border="0" style="width:350px;">
        <tr>
          <td>
            <div id="inputName">Region:</div>
          </td>
          <td>
            <div id="formInputs">
              <select name="region_u_i" id="region_u_i">
                <option value="0">Select Region</ option>
                  <?php
                  // if ($syscat['syscategory_id'] == 3) {
                  //   $vehicle = $conn->prepare(DbQuery::getIndividualRegion());
                  //   $vehicle->execute(array($region_id));
                  // } else if ($syscat['syscategory_id'] == 1) {
                  //   $vehicle = $conn->prepare(DbQuery::getAllRegion());
                  //   $vehicle->execute();
                  // } else if ($syscat['syscategory_id'] == 4) {
                  //   $vehicle = $conn->prepare(DbQuery::getIndividualRegion());
                  //   $vehicle->execute(array($region_id));
                  // }
                 
                    $vehicle = $conn->prepare(DbQuery::getAllRegion());
                    $vehicle->execute();

                  while ($vresult = $vehicle->fetch()) {
                  ?>
                <option value="<?php echo $vresult['id'] ?>" <?php if (!(strcmp($vresult['id'], $e_result['region_id']))) {
                                                                echo "selected=\"selected\"";
                                                              } ?>><?php echo $vresult['name'] ?>
                </option>
              <?php
                  }
              ?>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">State:</div>
          </td>
          <td>
            <div id="formInputs">
              <select name="state_u_i" id="state_u_i">
                <option value="0">Select State</ option>
                  <?php

                  $vehicleb = $conn->prepare(DbQuery::getState());
                  // $vehicleb->execute(array($e_result['region_id']));
                  $vehicleb->execute(array());
                  while ($vresultb = $vehicleb->fetch()) {
                  ?>
                <option value="<?php echo $vresultb['id'] ?>" <?php if (!(strcmp($vresultb['id'], $e_result['state_id']))) {
                                                                echo "selected=\"selected\"";
                                                              } ?>><?php echo $vresultb['name'] ?>
                </option>
              <?php
                  }
              ?>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">LGA:</div>
          </td>
          <td>
            <div id="formInputs">
              <select name="lga_u_i" id="lga_u_i">
                <option value="0">Select LGA</ option>
                  <?php

                  $vehiclebb = $conn->prepare(DbQuery::getLga());
                  //$vehiclebb->execute(array($e_result['state_id']));
                  $vehiclebb->execute(array());
                  while ($vresultbb = $vehiclebb->fetch()) {
                  ?>
                <option value="<?php echo $vresultbb['id'] ?>" <?php if (!(strcmp($vresultbb['id'], $e_result['lga_id']))) {
                                                                  echo "selected=\"selected\"";
                                                                } ?>><?php echo $vresultbb['name'] ?>
                </option>
              <?php
                  }
              ?>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">Area:</div>
          </td>
          <td>
            <div id="formInputs">
              <select name="area_u_i" id="area_u_i">
                <option value="0">Select Area</ option>
                  <?php

                  $areaId = $conn->prepare(DbQuery::getArea());
                  // $areaId->execute(array($e_result['lga_id']));
                  $areaId->execute(array());
                  while ($getAreaId = $areaId->fetch()) {
                  ?>
                <option value="<?php echo $getAreaId['id'] ?>" <?php if (!(strcmp($getAreaId['id'], $e_result['area_id']))) {
                                                                  echo "selected=\"selected\"";
                                                                } ?>><?php echo $getAreaId['name'] ?>
                </option>
              <?php
                  }
              ?>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">Depot:</div>
          </td>
          <td>
            <div id="formInputs">

              <select name="depots_u_id" id="depots_u_id">
                <option value="0">Select Depot</ option>
                  <?php

                  if ($syscat['syscategory_id'] == 3) {
                    $stm = $conn->prepare(DbQuery::getDepots());
                    $stm->execute(array($region_id));
                  } else if ($syscat['syscategory_id'] == 1) {
                    $stm = $conn->prepare(DbQuery::getDepotAdmin());
                    $stm->execute();
                  } else if ($syscat['syscategory_id'] == 4) {
                    $stm = $conn->prepare(DbQuery::getDepotSupervisor());
                    $stm->execute(array($depots_id));
                  }

                  while ($result = $stm->fetch()) {
                  ?>
                <option value="<?php echo $result['id'] ?>" <?php if (!(strcmp($result['id'], $e_result['depots_id']))) {
                                                              echo "selected=\"selected\"";
                                                            } ?>><?php echo $result['name'] ?>
                </option>
              <?php
                  }
              ?>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">Business Unit:</div>
          </td>
          <td>
            <div id="formInputs">
              <select name="businessunit_u_i" id="businessunit_u_i">
                <option value="1">Tobacco</option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">Distribution Channel:</div>
          </td>
          <td>
            <div id="formInputs">
              <select name="distchannel_u_i" id="distchannel_u_i">
                <option value="0">Select Distribution Channel</ option>
                  <?php
                  $vehicle = $conn->prepare(DbQuery::getVehicle());
                  $vehicle->execute();
                  while ($vresult = $vehicle->fetch()) {
                  ?>
                <option value="<?php echo $vresult['id'] ?>" <?php if (!(strcmp($vresult['id'], $e_result['vehicle_id']))) {
                                                                echo "selected=\"selected\"";
                                                              } ?>><?php echo $vresult['name'] ?>
                </option>
              <?php
                  }
              ?>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">Company:</div>
          </td>
          <td>
            <div id="formInputs">
              <select name="company_u_i" id="company_u_i">
                <option value="1">Company</option>
              </select>
            </div>
          </td>
        </tr>

      </table>
      <div style="border-bottom: solid 1px #E5E5E5;width:290px; margin-bottom:10px;font-family:Arial, Helvetica, sans-serif;
 font-size:13px;
 font-weight:bold;
 padding:2px; 
 color:#224889;margin-top:20px;">Authentication</div>
      <table width="418" border="0" style="width:350px;">
        <tr>
          <td width="157">
            <div id="inputName">Sys Category:</div>
          </td>
          <td width="251">
            <div id="formInputs">
              <select name="syscat_u_i" id="syscat_u_i">
                <?php
                $vehicle = $conn->prepare(DbQuery::getSysCategor());
                $vehicle->execute();
                while ($vresult = $vehicle->fetch()) {
                ?>
                  <option value="<?php echo $vresult['id'] ?>"><?php echo $vresult['name'] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">User Name:</div>
          </td>
          <td width="484" align="left">
            <div id="formInputs" style="height:25px;">
              <input name="username_u_i" type="text" class="setUsername u_i_users drclear" id="username_u_i" style=" float:left; margin-right:0px;" value="" />
              <button style="padding:1px; float:left; margin-left:2px;" class="cusSet userSet"></button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">Password:</div>
          </td>
          <td align="left">
            <div id="formInputs" style="height:25px;">
              <input name="password_u_i" type="text" class="setPassword u_i_pass drclear" id="password_u_i" style=" float:left; margin-right:0px;" value="" readonly="readonly" />
              <button style="padding:1px; float:left; margin-left:2px;" class="cusSet passSet"></button>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div id="inputName">Depot Waiver:</div>
          </td>
          <td>
            <div id="formInputs">
              <select name="depotwaiver_u_i" id="depotwaiver_u_i" class="drclear">
                <option value="true">True (with geofencing)</option>
                <option value="false">False (without geofencing)</option>
              </select>
            </div>
          </td>
        </tr>
      </table>
    </td>
    </tr>
    </table>
    </div>
</body>
</form>

</html>