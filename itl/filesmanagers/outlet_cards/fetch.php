<?php

require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db();
$conn = $db->connect();

$urno = $_POST['urno'];
$ids = '061334';

?>




<div style="height: 280px; width: auto; overflow: scroll">

  <table width="767" class="datatable" id="genericTableFormtable" style="width:100%;" summary="System Resources">
    <tr>
      <th>
        <div id="datatableColcontent">S/N</div>
      </th>
      <th width="68" id="datatableColcontent">Urno</th>
      <th width="81" id="datatableColcontent">Sys Cat.</th>
      <th width="119" id="datatableColcontent">Customer Name</th>
      <th width="158" id="datatableColcontent">Contact Name</th>
      <th width="103" id="datatableColcontent">Address</th>
      <th width="49" id="datatableColcontent">Phone</th>
      <th width="60" id="datatableColcontent">LatLng</th>
      <th width="78" id="datatableColcontent">Language</th>
      <th width="55" id="datatableColcontent">Outlet Type</th>
      <th width="53" id="datatableColcontent">Cust Class.</th>
      <th width="53" id="datatableColcontent">Date.</th>
    </tr>
    <?php
    $sn = 0;
    $urn = ltrim($urno, '0');
    $stm = $conn->prepare(DbQuery::getAllOutletCards());
    $stm->execute(array($urno, $urn));
    while ($stmp = $stm->fetch()) {
      $sn++;
    ?>
      <tr id="<?php echo $stmp['auto'] ?>" class="rowOdd btn_customers_all_cards my_card_update">
        <td width="32"><?php echo $sn . ' ' . $stmp['urno'] ?> </td>
        <td width="68"><?php echo $stmp['urno'] ?><input name="a_i_urno" type="hidden" value="<?php echo $stmp['urno'] ?>" class="urno<?php echo $stmp['auto'] ?>" /></td>
        <td width="81"><?php echo $stmp['syscat'] ?><input name="a_i_syscat" type="hidden" value="<?php echo $stmp['syscat'] ?>" /></td>
        <td width="119"><?php echo $stmp['outletname'] ?><input name="a_i_syscat" type="hidden" value="<?php echo $stmp['outletname'] ?>" class="custname<?php echo $stmp['auto'] ?>" /></td>
        <td width="158"><?php echo $stmp['contactname'] ?><input name="a_i_syscat" type="hidden" value="<?php echo $stmp['contactname'] ?>" class="conname<?php echo $stmp['auto'] ?>" /></td>
        <td width="103"><?php echo $stmp['outletaddress'] ?><input name="a_i_syscat" type="hidden" value="<?php echo $stmp['outletaddress'] ?>" class="addre<?php echo $stmp['auto'] ?>" /></td>
        <td width="49"><?php echo $stmp['contactphone'] ?><input name="a_i_syscat" type="hidden" value="<?php echo $stmp['contactphone'] ?>" class="cphone<?php echo $stmp['auto'] ?>" /></td>
        </td>
        <td width="60"><?php echo $stmp['latitude'] . "," . $stmp['longitude'] ?><input name="a_i_syscat" type="hidden" value="<?php echo $stmp['latitude'] . "," . $stmp['longitude'] ?>" class="clatlng<?php echo $stmp['auto'] ?>" /></td>
        <td width="78"><?php echo $stmp['language'] ?><input name="a_i_syscat" type="hidden" value="<?php echo $stmp['language'] ?>" class="clang<?php echo $stmp['auto'] ?>" /></td>
        <td width="78"><?php echo $stmp['outlettype'] ?><input name="a_i_syscat" type="hidden" value="<?php echo $stmp['outlettype'] ?>" class="ctype<?php echo $stmp['auto'] ?>" /></td>
        <td width="78"><?php echo $stmp['classname'] ?><input name="a_i_syscat" type="hidden" value="<?php echo $stmp['classname'] ?>" class="cclass<?php echo $stmp['auto'] ?>" /></td>
        <td width="78"><?php echo $stmp['entry_date_time'] ?></td>
      </tr>
    <?php
    }
    ?>
  </table>


</div>
<div style="height: 300px; width: auto; overflow: scroll">
  <br>
  <table width="688" style="margin-left: 20px">
    <tr>
      <td width="330" align="left" valign="top">
        <div style="border-bottom: solid 1px #E5E5E5;width:283px; margin-bottom:10px;font-family:Arial, Helvetica, sans-serif;
 font-size:13px;
 font-weight:bold;
 padding:2px; 
 color:#224889;">Update Customer Cards</div>
        <table width="418" border="0" style="width:350px;">
          <tr>
            <td width="157">
              <div id="inputName">Customer Name:</div>
            </td>
            <td width="251">
              <div id="formInputs">
                <input name="fname_i_u" type="text" id="e_empty" class="fname_apps" readonly />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div id="inputName">Contact Name:</div>
            </td>
            <td>
              <div id="formInputs">
                <input name="middlename_u_i" type="text" id="e_empty" class="cname_app" readonly />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div id="inputName">Address:</div>
            </td>
            <td>
              <div id="formInputs">
                <input name="lastname_u_i" type="text" id="e_empty" class="cadres_app" readonly />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div id="inputName">Language:</div>
            </td>
            <td>
              <div id="formInputs">
                <input name="lastname_u_i" type="text" id="e_empty" class="clang_app" readonly />
              </div>
            </td>
          </tr>

        </table>
        <div id="btn_c" style="margin-top:10px; margin-bottom:5px;">
          <button id="btn_regis_02_card" class="btn_regis_02_cards"><img src="endofperiod/image/savebuttons.png" /> Save </button>
        </div>
      </td>
      <td width="346" align="left" valign="top"><br>
        <table width="418" border="0" style="width:350px;">
          <tr>
            <td width="157">
              <div id="inputName">Phone:</div>
            </td>
            <td width="251">
              <div id="formInputs"><input name="custcode_u_i" type="text" id="e_empty" class="cphone_app" readonly /></div>
            </td>
          </tr>


          <tr>
            <td>
              <div id="inputName">LatLng:</div>
            </td>
            <td>
              <div id="formInputs">
                <input name="edcode_u_i" type="text" id="e_empty" class="clatlng" readonly />
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div id="inputName">Outlet Type:</div>
            </td>
            <td>
              <div id="formInputs">
                <input name="lastname_u_i" type="text" id="e_empty" class="ctype_app" readonly />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div id="inputName">Cust Class:</div>
            </td>
            <td>
              <div id="formInputs">
                <input name="lastname_u_i" type="text" id="e_empty" class="class_app" readonly />
              </div>

            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>
<input name="a_i_syscat" type="hidden" value="" id="e_empty" class="urno_autos" />