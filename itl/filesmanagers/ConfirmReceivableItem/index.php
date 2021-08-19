<?php session_start(); ?>
<?php
ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db();
$conn = $db->connect();
$users_id = $_SESSION['NTY3ODk3NDM0NTY3ODkw'];


?>


<div id="body_general">

  <div id="accounttile">Confirm Receivable Item <span id="close"><img src="filesmanagers/jlib/cancel_icon.png" /></span></div>

  <div id="indidual_general" style=" padding-top:80px;">


    <table border="1" id="membrs_tables" style="background:#F7F7F3; width:868px; margin-left:70px;">
      <td>
        <div id="formInputs">
          <select name="">
            <option>--Select Option---</option>
            <option>All Receivable Items</option>
            <option>Approved Receivable Items</option>
            <option>Rejected Receivable Items</option>
            <option>Current Receivable Items</option>
          </select>


        </div>
      </td>
    </table>
    <table width="500" border="1" id="membrs_tables" style="background:#F7F7F3; width:500px; margin-left:70px;">
      <tr>
        <td width="299" align="left" valign="top">
          <div id="table_results" style="width:850px;">
            <table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:833px;">
              <thead>
                <tr>
                  <th width="146">
                    <div id="datatableColcontent">Status</div>
                  </th>
                  <th width="146">
                    <div id="datatableColcontent">Owner</div>
                  </th>
                  <th width="257">
                    <div id="datatableColcontent">Stock name</div>
                  </th>
                  <th width="81">
                    <div id="datatableColcontent">Qty</div>
                  </th>
                  <th width="146">
                    <div id="datatableColcontent">Batch No</div>
                  </th>
                  <th width="257">
                    <div id="datatableColcontent">UoM</div>
                  </th>
                  <th width="81">
                    <div id="datatableColcontent">Stock Type</div>
                  </th>
                  <th width="146">
                    <div id="datatableColcontent">Supply</div>
                  </th>
                  <th width="257">
                    <div id="datatableColcontent">Lot No</div>
                  </th>
                  <th width="81">
                    <div id="datatableColcontent">Date</div>
                  </th>
                  <th width="81">

                  </th>
                </tr>
                <tr id="d" class="rowEven"></tr>
                <thead>
                <tbody class="include_table">
                  <?php
                  $modules = $conn->prepare(DbQuery::getLastInsertedReceivaleItems());
                  $modules->execute(array($users_id));
                  while ($qresult = $modules->fetch()) {

                    $lastInsertedI = $qresult['id'];
                    $fullname = $qresult['fullname'];
                    $stock = $qresult['stock'];
                    $qty = $qresult['qty'];
                    $batch_name = $qresult['batch_name'];
                    $uom = $qresult['uom'];
                    $stocktype = $qresult['stocktype'];
                    $supplier = $qresult['supplier'];
                    $lotnumber = $qresult['lotnumber'];
                    $entry_date = $qresult['entry_date'];

                  ?>
                    <tr id='$lastInsertedId' class='rowOdd clickModule clickModule$lastInsertedId'>
                      <td><button style="width:90px">Approve</button><button style="width:90px">Reject</button></td>
                      <td><?php echo  $fullname ?></td>
                      <td><?php echo $stock ?></td>
                      <td><?php echo $qty ?></td>
                      <td><?php echo $batch_name ?></td>
                      <td><?php echo $uom ?></td>
                      <td><?php echo $stocktype ?></td>
                      <td><?php echo $supplier ?></td>
                      <td><?php echo $lotnumber ?></td>
                      <td><?php echo $entry_date ?></td>
                      <td><img src='endofperiod/image/savebuttons.png' /></td>
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