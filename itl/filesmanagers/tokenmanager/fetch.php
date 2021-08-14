<?php
require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db();
$conn = $db->connect();
$user_id = $_POST['user_id'];
$urno = $_POST['urno'];
$date =  date('Y-m-d');
?>


<?php

$stm = $conn->prepare(DbQuery::allTmSalesRepsOutlets());
$stm->execute(array($user_id, $urno));
$stmp = $stm->fetch();
?>

<div style=" width: 50%;">

  <div style="border-bottom: solid 1px #E5E5E5;width:283px; margin-bottom:10px;font-family:Arial, Helvetica, sans-serif;
 font-size:13px;
 font-weight:bold;
 padding:2px; 
 color:#224889; margin-left:50px">Update Mobile Number AND send Token</div>
  <table width="418" border="0" style="width:350px;margin-left:50px ">
    <tr>
      <td width="157">
        <div id="inputName">URNO:</div>
      </td>
      <td width="251">
        <div id="formInputs">
          <input name="fname_i_u" type="text" id="e_empty" class="fname_apps" readonly value="<?php echo $stmp['urno'] ?>" disabled />
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div id="inputName">Customer:</div>
      </td>
      <td>
        <div id="formInputs">
          <input name="middlename_u_i" type="text" id="e_empty" class="cname_app" readonly disabled value="<?php echo $stmp['customerno'] ?>" />
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div id="inputName">Default Token:</div>
      </td>
      <td>
        <div id="formInputs">
          <input name="lastname_u_i" type="text" id="e_empty" class="cadres_app" readonly disabled value="<?php echo $stmp['defaulttoken'] ?>" />
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div id="inputName">Phone:</div>
      </td>
      <td>
        <div id="formInputs">
          <input name="lastname_u_i" type="text" id="e_empty" class="et_t_b_m_v_m<?php echo $stmp['urno']  ?>" placeholder=" <?php echo $stmp['contactphone'] ?>" />

        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div id=" inputName">
        </div>
      </td>
      <td>
        <div id="formInputs">
          <div id="btn_c" style="margin-top:10px; margin-bottom:5px;">
            <button class="route_regis_00023_token_update" id="<?php echo $stmp['urno'] ?>">Reset</button>
            <button id="btn_regis_02_card" class="btn_regis_02_cards" style="width: 110px;"> Send Token </button>
          </div>
        </div>
      </td>
    </tr>

  </table>
  </td>
  </tr>
  </table>
</div>

</div>