<?php 
    require '../../dbconfig/db.php';
    require '../../query/users.php';
    $db   = new db();
    $conn = $db->connect();
    $id = $_POST['id'];
    $date =  date('Y-m-d');
?>

<div style=" width: 700px; height: 450px;">
<table class="datatable" id="genericTableFormtable" summary="System Resources" style="width:100%;">
<tr>
    <th width="200" id="datatableColcontent">S/N</th>
    <th width="200" id="datatableColcontent">Product Name</th>
    <th width="62" id="datatableColcontent">Product Code</th>
    <th width="62" id="datatableColcontent">Dy. Load Out</th>
    <th width="62" id="datatableColcontent">MT Qty Sold</th>
</tr>
<?php 
    $sn = 0; 
    $stm = $conn->prepare(DbQuery::DataIntegrity());
    $stm->execute(array($date, $id));
    while($stmp = $stm->fetch()){
    $sn++;
?>
<tr id="tr"  class="rowOdd" >
    <td><?php echo $sn ?></td>
    <td><?php echo $stmp['proname'] ?></td>
    <td><?php echo $stmp['sku'] ?></td>
    <td><?php echo $stmp['dy'] ?></td>
    <td><?php echo $stmp['mt'] ?></td>
</tr>
<?php 
    }
?>
</table>
</div>
