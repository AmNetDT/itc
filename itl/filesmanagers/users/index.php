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

  <div id="accounttile">Users <span id="close"><img src="filesmanagers/jlib/cancel_icon.png" /></span></div>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <input type="submit" value="+ Add User" style="font-weight:bold; padding:3px; margin-bottom:4px; padding-left:5px; padding-right:5px;" class="sys_regts" />
  <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:100%;">

    <tr>
      <th>
        <div id="datatableColcontent">S/N</div>
      </th>
      <th width="235" id="datatableColcontent">ED code</th>
      <th width="696" id="datatableColcontent">Name</th>
      <th width="336" id="datatableColcontent">Area</th>
      <th width="294" id="datatableColcontent">Depot</th>
      <th width="294" id="datatableColcontent">User Category</th>
    </tr>

    <?php
    $sn = 0;
    if ($syscat['syscategory_id'] == 3) {
      $stm = $conn->prepare(DbQuery::sysMonitorList());
      $stm->execute(array($region_id));
    } else if ($syscat['syscategory_id'] == 1) {
      $stm = $conn->prepare(DbQuery::sysAdminList());
      $stm->execute(array());
    } else if ($syscat['syscategory_id'] == 4) {
      $stm = $conn->prepare(DbQuery::sysSupervisorList());
      $stm->execute(array($region_id, $depots_id));
    }
    while ($stmp = $stm->fetch()) {
      $sn++;
    ?>
      <tr id="<?php echo $stmp['id'] ?>" class="rowOdd sys_edit_users rst<?php echo $stmp['id'] ?>" lang="<?php echo $stmp['fullname'] . " (" . $stmp['ecode'] . ")" ?>">

        <td width="135"><?php echo $sn ?></td>
        <td width="235"><?php echo $stmp['ecode'] ?></td>
        <td width="696"><?php echo $stmp['fullname'] ?></td>
        <td width="336"><?php echo $stmp['depots'] ?></td>
        <td width="294"><?php echo $stmp['depots'] ?></td>
        <td width="294"><?php echo $stmp['syscat'] ?></td>
      </tr>
    <?php

    }
    ?>

  </table>