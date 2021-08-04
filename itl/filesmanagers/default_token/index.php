<script>
$(document).ready(function() {
  
      let region = $("#regionID_008678").val();
      $("#loader_httpFeed").show();

      let res = {
        regionid: region
      }

      $.ajax({
        
          type: "POST",
          url: "http://mt3api.com:9000/api/validate/alldefaulttoken",
          data: JSON.stringify(res),
          contentType: 'application/json',
          dataType: 'json',
          success: function(datas) {

            let allData = datas.data

            for(let i = 0; i < allData.length; i++) {

              $('#newTable > tbody:last').before(
                `
                <tr id="${datas.data[i]._id}"  class="rowOdd btn_manager_model_customers_default${datas.data[i]._id}" >
                  <td>${i+1}</td>
                  <td>${datas.data[i].urno}</td>
                  <td>${datas.data[i].custname}</td>
                  <td>${datas.data[i].conphone}</td>
                  <td><div class="r_m_r_oute_mappers_customers${datas.data[i]._id}">${datas.data[i].repname}</div></td> 
                  <td>${datas.data[i].regionname}</td>
                  <td>${datas.data[i].deopt_name}</td>
                  <td><button class="" id="" lang="">View Location</button> </td>
                  <td>
                    <div>
                      <button class="approve_001_002_defaultToken" id="${datas.data[i]._id}" >Approve</button> 
                      <button class="decline_001_002_defaultToken" id="${datas.data[i]._id}" >Decline</button> 
                      <input type="hidden" id="custid00_01${datas.data[i]._id}"  value="${datas.data[i].urno}" />
                      <input type="hidden" id="custUrno00_01${datas.data[i]._id}"  value="${datas.data[i]._id}" />
                      <input type="hidden" id="custCurLocation00_01${datas.data[i]._id}"  value="" />
                      <input type="hidden" id="cusOutletLocation00_01${datas.data[i]._id}" value=">" />
                      <input type="hidden" id="custRegion00_01${datas.data[i]._id}" value="${datas.data[i].region_id}" />
                      <input type="hidden" id="custEmployeeId00_01${datas.data[i]._id}" value="${datas.data[i].employee_id}" />
                    </div>
                  </td>
                </tr>
                `
              );
            }
            $("#loader_httpFeed").hide();
          }
      });
})
</script>


<?php session_start() ;?>

<?php 

  ini_set('max_execution_time', 0);
  require '../../dbconfig/db.php';
	require '../../query/users.php';
	
  $db   = new db();
  $conn = $db->connect();
	$users_id = $_SESSION['NTY3ODk3NDM0NTY3ODkw'];
	
	$sys = $conn->prepare (DbQuery:: UserCategotyAndPriv());
  $sys->execute(array($users_id));
  $syscat = $sys->fetch();
	$region_id = $syscat['region_id'];
  $depots_id = $syscat['depots_id'];
  $dates =  date('Y-m-d');
	
?>


<div id="body_general">

<div id="accounttile">Approve Default Token
<span id="close"><img src="filesmanagers/jlib/cancel_icon.png"  /></span>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table class="datatable"  summary="System Resources" style="width:80%" id = "newTable">

  <thead>
    <tr>
      <th><div id="datatableColcontent">S/N</div></th>
      <th  id="datatableColcontent">Urno</th>
      <th id="datatableColcontent">Customer Name</th>
      <th  id="datatableColcontent">Customer Phone</th>
      <th  id="datatableColcontent">Rep Names</th>
      <th  id="datatableColcontent">Region</th>
      <th  id="datatableColcontent">Depots</th>
      <th  id="datatableColcontent">Confirm Location</th>
      <th  id="datatableColcontent"></th>
    </tr>
    </thead>
    <tbody></tfoot>
  </table>
          




