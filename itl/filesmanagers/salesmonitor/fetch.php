<?php 

    require '../../dbconfig/db.php';
    require '../../query/users.php';

    $db   = new db();
    $conn = $db->connect();

    $outlet_id = $_POST['outlet_id'];
    $employee_id = $_POST['employee_id'];
    $date =  date('Y-m-d');

  
?>

<div style="height: 500px; width: auto; overflow: scroll;">
			
				<table width="767"  class="datatable" id="genericTableFormtable" style="width:100%;" summary="System Resources">
          <tr   >
            <th><div id="datatableColcontent">S/N</div></th>
            <th width="75" id="datatableColcontent">Sku Code</th>
            <th width="200" id="datatableColcontent">Sku Name</th>
            <th width="50" id="datatableColcontent">Qty Sold</th>
            <th width="158" id="datatableColcontent">Amount</th>
            <th width="103" id="datatableColcontent">Pricing</th>
            <th width="49" id="datatableColcontent">Inventory</th>
            <th width="49" id="datatableColcontent">SOQ</th>
            <th width="49" id="datatableColcontent">Posting Time</th>
            </tr>
			<?php 
        $sn = 0; 
        $urn = ltrim($outlet_id,'0');
				$stm = $conn->prepare(DbQuery::repOutletSales());
				$stm->execute(array($employee_id,$urn,$date));
				while($stmp = $stm->fetch()) {
				$sn++;
			?>
          <tr class="rowOdd">
            <td><?php echo $sn ?> </td>
            <td><?php echo $stmp['product_code']?></td>
            <td><?php echo $stmp['product_name']?></td>
            <td><?php echo $stmp['qty']?></td>
            <td><?php echo $stmp['amount']?></td>
            <td><?php echo $stmp['pricing']?></td>
            <td><?php echo $stmp['inventory']?></td>
            <td><?php echo $stmp['soq']?></td>
            <td><?php echo $stmp['transtime']?></td>
          </tr>
          <?php 
		}
	?>
        </table>
			</div>
