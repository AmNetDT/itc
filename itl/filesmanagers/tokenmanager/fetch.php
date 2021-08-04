<?php 
    require '../../dbconfig/db.php';
    require '../../query/users.php';

    $db   = new db();
    $conn = $db->connect();
    $employeeid = $_POST['employeeid'];
    $date =  date('Y-m-d');
?>

<div style=" width: auto; overflow: scroll">
			
				<table width="767" class="datatable" id="genericTableFormtable" style="width:100%;" summary="System Resources">
          <tr>
            <th><div id="datatableColcontent">S/N</div></th>
            <th width="68" id="datatableColcontent">Urno</th>
            <th width="119" id="datatableColcontent">Customer Name</th>
            <th width="62" id="datatableColcontent">Default Token</th>
            <th width="62" id="datatableColcontent"></th>
            <th width="62" id="datatableColcontent"></th>
            </tr>
			<?php 
        $sn = 0; 
				$stm = $conn->prepare(DbQuery::allTmSalesRepsOutlets());
				$stm->execute(array($employeeid,$date));
				while($stmp = $stm->fetch()){
				$sn++;
			?>
          <tr id="<?php echo $stmp['urno'] ?>"  class="rowOdd btn_customers_all_cards my_card_update">
            <td width="32"><?php echo $sn ?> </td>
            <td width="30"><?php echo $stmp['urno']?></td>
            <td><?php echo $stmp['outletname']?></td>
            <td><?php echo $stmp['tmtoken'] ?></td>
            <td>
            <input name="fname_i_u" type="text" id="fname_i_u" value="" placeholder="<?php echo $stmp['contactphone'] ?>" style="width:80px; position:relative" 
        class="et_t_b_m_v_m<?php echo $stmp['urno']  ?>"   /> 
        <button class="route_regis_00023_token_update" id=<?php echo $stmp['outlet_id'] ?> >Reset</button> 
          </td>


            <td>
               <button class="route_regis_00023_send_token" id=<?php echo $stmp['urno'] ?> >Sent Token</button> 
            </td>
          </tr>
          <?php 
		}
	?>
        </table>
			</div>
		
   