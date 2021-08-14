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

?>


<div id="body_general">

  <div id="accounttile">Competition Brands<span id="close"><img src="filesmanagers/jlib/cancel_icon.png" /></span></div>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <div class="dialog" id="d11">
    <div id="indidual_general">
      <div id="uppers">
        <form class="add_competition_to_users">
          <table width="385" border="0" cellpadding="0" cellspacing="0" style="margin-left:70px; width:450px;">

            <tr>
              <td width="100">
                <div id="inputName" style="text-align:left">Brand Name:</div>
              </td>
              <td>

                <div id="formInputs">
                  <select name="competition_u_id" id="competition_u_id">
                    <option value="0">Select Competition</ option>
                      <?php

                      if ($syscat['syscategory_id'] == 3) {
                        $stm = $conn->prepare(DbQuery::getCompetitorBrandForSysMonitor());
                        $stm->execute(array($region_id));
                      } else if ($syscat['syscategory_id'] == 1) {
                        $stm = $conn->prepare(DbQuery::getCompetitorBrandForAdmin());
                        $stm->execute();
                      }

                      while ($result = $stm->fetch()) {
                      ?>
                    <option value="<?php echo $result['id'] ?>"><?php echo $result['products'] ?>
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
                      }

                      while ($results = $stm->fetch()) {
                      ?>
                    <option value="<?php echo $results['id'] ?>"><?php echo $results['name'] ?></option>
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

      <table border="1" style="background:#F7F7F3; width:700px; margin-left:70px;">
        <tr>
          <td width="299" align="left" valign="top">
            <div id="table_results" style="width:800px;">
              <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:782px;">
                <thead>
                  <tr>
                    <th width="146">
                      <div id="datatableColcontent">Brand Code</div>
                    </th>
                    <th width="146">
                      <div id="datatableColcontent">Brand Name</div>
                    </th>
                    <th width="146">
                      <div id="datatableColcontent">Depot Name</div>
                    </th>
                    <th width="146">
                      <div id="datatableColcontent">State Name</div>
                    </th>
                    <th width="146">
                      <div id="datatableColcontent">Region Name</div>
                    </th>
                    <th width="81">
                      <div id="datatableColcontent"></div>
                    </th>
                  </tr>
                  <tr id="d" class="rowEven"></tr>
                  <thead>
                  <tbody class="include_table_data">

                    <?php

                    if ($syscat['syscategory_id'] == 3) {
                      $tsm = $conn->prepare(DbQuery::fetchAllSupervisorCompetition());
                      $tsm->execute(array($region_id));
                    } else if ($syscat['syscategory_id'] == 1) {
                      $tsm = $conn->prepare(DbQuery::fetchAllAdminCompetition());
                      $tsm->execute();
                    }

                    while ($tsm_result = $tsm->fetch()) {
                    ?>

                      <tr id="<?php echo $tsm_result['id'] ?>" class="rowOdd clickModuleCompition clickModuleCompition<?php echo $tsm_result['id'] ?>">
                        <td><?php echo $tsm_result['skucode'] ?></td>
                        <td><?php echo $tsm_result['skuname'] ?></td>
                        <td><?php echo $tsm_result['depotname'] ?></td>
                        <td><?php echo $tsm_result['statename'] ?></td>
                        <td><?php echo $tsm_result['regionname'] ?></td>
                        <td id="type1"><button class="dlete_mod_remove_comptition dlete_mod_competition<?php echo $tsm_result['id'] ?>" id="<?php echo $tsm_result['id'] ?>">Delete</button></td>
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