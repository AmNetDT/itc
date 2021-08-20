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



// $estm = $conn->prepare(DbQuery::MapOutlet());
// $estm->execute();
// $e_result = $estm->fetch();

?>


<div id="body_general">

  <div id="accounttile">Map Outlet <span id="close"><img src="filesmanagers/jlib/cancel_icon.png" /></span></div>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>


  <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:100%;">

    <tr>
      <th>
        <div id="datatableColcontent">S/N</div>
      </th>
      <th width="235" id="datatableColcontent">Outletname</th>
      <th width="696" id="datatableColcontent">Contactname</th>
      <th width="336" id="datatableColcontent">Contactphone</th>
      <th width="294" id="datatableColcontent">Region</th>
      <th width="294" id="datatableColcontent">Depot</th>
      <th width="294" id="datatableColcontent">Latitude</th>
      <th width="294" id="datatableColcontent">Longitude</th>
    </tr>


    <?php
    $sn = 0;
    if ($syscat['syscategory_id'] == 3) {
      $stm = $conn->prepare(DbQuery::MapOutletsysMonitorList()); //include the first query here
      $stm->execute(array($region_id));
    } else if ($syscat['syscategory_id'] == 1) {
      $stm = $conn->prepare(DbQuery::MapOutletsysAdminList()); //include  the second query here
      $stm->execute(array());
    }
    while ($stmp = $stm->fetch()) {
      $sn++;
    ?>

      <tr id="<?php echo $stmp['id'] ?>" class="rowOdd sys_mapoutlet
     rst<?php echo $stmp['id'] ?>" lang="<?php echo $stmp['fullname'] . " (" . $stmp['staffcode'] . ")" ?>">
        <td width="135"><?php echo $sn ?></td>
        <td width="235"><?php echo $stmp['outletname'] ?></td>
        <td width="696"><?php echo $stmp['contactname'] ?></td>
        <td width="336"><?php echo $stmp['contactphone'] ?></td>
        <td width="294"><?php echo $stmp['region'] ?></td>
        <td width="294"><?php echo $stmp['depot'] ?></td>
        <td width="294"><?php echo $stmp['latitude'] ?></td>
        <td width="294"><?php echo $stmp['longitude'] ?></td>
      </tr>
    <?php
    }
    ?>

  </table>