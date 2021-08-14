<?php
require '../../dbconfig/db.php';
require '../../query/users.php';
$db   = new db();
$conn = $db->connect();
$id = $_POST['id'];
$date =  date('Y-m-d');
?>

<?php
$dates =  date('Y-m-d');
$days = strtolower(date("w", strtotime($dates)));
$dateOfTheWeek = '';

if ($days == 1) {
  $dateOfTheWeek = 'mon';
} else if ($days == 2) {
  $dateOfTheWeek = 'tue';
} else if ($days == 3) {
  $dateOfTheWeek = 'wed';
} else if ($days == 4) {
  $dateOfTheWeek = 'thur';
} else if ($days == 5) {
  $dateOfTheWeek = 'fri';
} else if ($days == 6) {
  $dateOfTheWeek = 'sat';
} else {
  $dateOfTheWeek = 'sun';
};
?>

<div style="height:400px;">
  <table width="800" border="1">
    <tbody>
      <tr>
        <th width="300" align="left" valign="top" scope="col">

          <div style="height: 400px; width: auto; overflow: scroll;">

            <table width="600" class="datatable" id="genericTableFormtable" style="width:300px;" summary="System Resources">
              <tr>
                <th>
                  <div id="datatableColcontent">S/N</div>
                </th>
                <th width="62" id="datatableColcontent">Urno </th>
                <th width="181" id="datatableColcontent">Outlet name</th>

              </tr>
              <?php
              $sn = 0;
              $stm = $conn->prepare(DbQuery::getRepCustomers());
              $stm->execute(array($id, $dateOfTheWeek));
              while ($stmp = $stm->fetch()) {
                $sn++;
              ?>
                <tr id="tr" class="rowOdd btn_tm_outlets_fetch_all rst" lang="<?php echo $stmp['urno'] ?>" eng="<?php echo $id?>">
                  <td width="41"><?php echo $sn ?></td>
                  <td width="62"><?php echo $stmp['urno'] ?></td>
                  <td width="181"><?php echo $stmp['outletname'] ?></td>
                </tr>
              <?php
              }
              ?>
            </table>
          </div>
        </th>
        <th width="904" align="left" valign="top" scope="col" id="fetch_here_token">

        </th>
      </tr>
    </tbody>
  </table>
</div>