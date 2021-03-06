<?php 
ini_set('max_execution_time', 0);
	require '../../dbconfig/db.php';
	require '../../query/users.php';
	
	$db   = new db();
	$conn = $db->connect();
	$fullname = $_POST['fullname'];
	$sex_u_i = $_POST['sex_u_i'];
	$phoneno_u_i = $_POST['phoneno_u_i'];
	$email_u_i = $_POST['email_u_i'];
	$username_u_i = $_POST['username_u_i'];
	$password_u_i = $_POST['password_u_i'];
	$phonefacode_u_i = $_POST['phonefacode_u_i'];
	$bikefacode_u_i = $_POST['bikefacode_u_i'];
	$phoneimie_u_i = $_POST['phoneimie_u_i'];
	$edcode_u_i = $_POST['edcode_u_i'];
	$region_u_i = $_POST['region_u_i'];
	$state_u_i = $_POST['state_u_i'];
	$lga_u_i = $_POST['lga_u_i'];
	$area_u_i = $_POST['area_u_i'];
	$distchannel_u_i = $_POST['distchannel_u_i'];
	$depots_u_id = $_POST['depots_u_id'];
	$company_u_i = $_POST['company_u_i'];
	$syscat_u_i = $_POST['syscat_u_i'];
	$devicebrands_u_i = $_POST['devicebrands_u_i'];
	$depotwaiver_u_i = $_POST['depotwaiver_u_i'];
	$dates = date('Y-m-d h:i:s');	
	
	
	$stmt = $conn->prepare (DbQuery::authUsers());
	$stmt->execute(array($username_u_i));
	$row = $stmt->fetch();

	if($row['counts']==0){

		$stm = $conn->prepare (DbQuery::regUsers());
		$stm->execute(array(
		$fullname, $sex_u_i, $phoneno_u_i, $email_u_i,
		$username_u_i, $password_u_i, $phonefacode_u_i,
		$bikefacode_u_i, $phoneimie_u_i, $edcode_u_i,
		$region_u_i, $state_u_i, $lga_u_i, $area_u_i,
		$distchannel_u_i, $depots_u_id, $company_u_i,
		 'YES', $syscat_u_i, $devicebrands_u_i,
		$depotwaiver_u_i, $dates
		));

		$json =array(
			"status"=>200,
			"msg"=>"Registration Successful"
		);
		
	}else{

		$json =array(
			"status"=>400,
			"msg"=>"Username already take, Please manually adjust the user name"
		);
	}

	echo json_encode($json);
?>
