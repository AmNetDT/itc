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

  <div id="accounttile">Raise Receivable Item Status <span id="close"><img src="filesmanagers/jlib/cancel_icon.png" /></span></div>

  <div id="indidual_general">
    <div id="uppers">
      <form class="add_modules_to_users">
        <table width="485" border="0" cellpadding="0" cellspacing="0" style="margin-left:70px; padding-top:50px; width:650px;">
          <tr>
            <td width="112">
              <div id="inputName" style="text-align:left">Stock Name:</div>
            </td>
            <td>
              <div id="formInputs">
                <select name="stock_id">
                  <?php
                  $umodules = $conn->prepare(DbQuery::getStock());
                  $umodules->execute();
                  while ($sresult = $umodules->fetch()) {
                  ?>
                    <option value="<?php echo $sresult['id'] ?>"><?php echo $sresult['name'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </td>
            <td width="112">
              <div id="inputName" style="text-align:left">UoM:</div>
            </td>
            <td>
              <div id="formInputs">
                <select name="uom">
                  <?php
                  $umodules = $conn->prepare(DbQuery::getUom());
                  $umodules->execute();
                  while ($sresult = $umodules->fetch()) {
                  ?>
                    <option value="<?php echo $sresult['id'] ?>"><?php echo $sresult['name'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td width="112">
              <div id="inputName" style="text-align:left">Qty</div>
            </td>
            <td>
              <div id="formInputs">

                <input type="text" name="qty" />
              </div>
            </td>
            <td width="112">
              <div id="inputName" style="text-align:left">Stock Type</div>
            </td>
            <td>
              <div id="formInputs">
                <select name="stock_type_id">
                  <?php
                  $umodules = $conn->prepare(DbQuery::getStockType());
                  $umodules->execute();
                  while ($sresult = $umodules->fetch()) {
                  ?>
                    <option value="<?php echo $sresult['id'] ?>"><?php echo $sresult['name'] ?></option>
                  <?php
                  }
                  ?>
                </select>
                <input type="hidden" value="<?php echo $users_id ?>" name="user_id" />
              </div>
            </td>

          </tr>

          <tr>
            <td width="112">
              <div id="inputName" style="text-align:left">Batch No.</div>
            </td>
            <td>
              <div id="formInputs">

                <input type="text" name="batch_name" />
              </div>
            </td>
            <td width="112">
              <div id="inputName" style="text-align:left">Supplier</div>
            </td>
            <td>
              <div id="formInputs">
                <select name="supplier_id">
                  <?php
                  $umodules = $conn->prepare(DbQuery::getSupplier());
                  $umodules->execute();
                  while ($sresult = $umodules->fetch()) {
                  ?>
                    <option value="<?php echo $sresult['id'] ?>"><?php echo $sresult['name'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td width="112">
              <div id="inputName" style="text-align:left">Date</div>
            </td>
            <td>
              <div id="formInputs">
                <input type="text" name="entry_date" value="" />
              </div>
            </td>
            <td width="112">
              <div id="inputName" style="text-align:left">Lot Number</div>
            </td>
            <td>
              <div id="formInputs">
                <input name="lotnumber" type="text" />
              </div>
            </td>
          </tr>
        </table>
        <div id="butoss" style="margin-left:70px; margin-top:30px;">
          <button class="r_inventory"><img src="endofperiod/image/savebuttons.png" /> Save</button>
        </div>
        <div style="margin-left:70px; margin-top:30px;">

          <span style="margin-top:-5px;">
            <tr>



            </tr>
          </span>
        </div>

      </form>
    </div>

    <table border="1" id="membrs_tables" style="background:#F7F7F3; width:868px; margin-left:70px;">
      <td>
        <div id="formInputs">
          <span><input type=" text" /></span>
          <span><button class="cusSet"><img src="customerManagement/image/searchIcone.png" /></button> </span>
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