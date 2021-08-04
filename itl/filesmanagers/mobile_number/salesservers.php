<?php 

ini_set('max_execution_time', 0);
require '../../dbconfig/db.php';
require '../../query/users.php';

$db   = new db();
$conn = $db->connect();

$id = trim($_REQUEST['id']);
$dates =  date('Y-m-d');
$time = date("H:i:s"); 

$stm = $conn->prepare (DbQuery::getUpdateMobileDetails());
$stm->execute(array($id));
$rows = $stm->fetch();

$updateMobileNumber = $conn->prepare (DbQuery::updateMobileDetails());
$updateMobileNumber->execute(array($rows['contactphone'], $rows['outlet_id']));

$updateMobile = $conn->prepare (DbQuery::updateMobileNumber());
$updateMobile->execute(array($id));

$getTodayToken = $conn->prepare (DbQuery::getTokenToValidateSales());
$getTodayToken->execute(array($rows['outlet_id']));
$fetchToken = $getTodayToken->fetch();

$NetworkLine = $rows['contactphone'];
if (strlen($NetworkLine) == 10) {
  $NetworkLine = '0'.$rows['contactphone'];
}

//random 
$twoDigitRandomGenerator =  rand(1,2);
$threeDigitRandomGenerator =  rand(1,3);
$SimServerToken = '';
$customerToken = $fetchToken['cust_token'];
$mobileFourDigitPrefix = substr($NetworkLine,0,4);
$mobileFiveDigitPrefix = substr($NetworkLine,0,5);

 //Network Prefix
 $mtnPrefix = array('0806', '0706', '0903', '0704', '0906', '0703', '0814', '0810', '0803', '0816', '0813');
 $gloPrefix = array('0815', '0905', '0811', '0807', '0805', '0705');
 $airtelPrefix = array('0701', '0808', '0812', '0802', '0708', '0901', '0902', '0904', '0907');
 $nineMobilePrefix = array('0909', '0908', '0818', '0817', '0809');
 $mtnAcquiredLinePrefix = array('07025', '07026');


 if(in_array($mobileFourDigitPrefix,$mtnPrefix)) {
  switch ($threeDigitRandomGenerator) {
      case 1:
           $SimServerToken  = 'GO2S296C1S8SCNWCWBXC';
        break;
      case 2:
           $SimServerToken  = 'CBAFKH9N5JG8Z3W3EX5Z';
        break;
      case 3:
          $SimServerToken  = 'SR58ZQRFOOKWY57C27UZ';
        break;
    };
}else if(in_array($mobileFourDigitPrefix ,$airtelPrefix)){
  switch ($twoDigitRandomGenerator) {
      case 1:
           $SimServerToken  = 'NJF8DIBMUX4MDBW646N4';
        break;
      case 2:
           $SimServerToken  = 'IZ48GXTGHKSMKV8MX981';
        break;
    };
}else if(in_array($mobileFourDigitPrefix ,$gloPrefix)){
  switch ($twoDigitRandomGenerator) {
      case 1:
           $SimServerToken  = '56AD3GDPT3OFC4POU5DS';
        break;
      case 2:
           $SimServerToken  = 'H691MUCRGCRJD13ESTE6';
        break;
    };
}else if(in_array($mobileFourDigitPrefix ,$nineMobilePrefix)){
  switch ($twoDigitRandomGenerator) {
      case 1:
           $SimServerToken  = 'FO6CSY5ARC17RWR49HZJ';
        break;
      case 2:
           $SimServerToken  = 'RBCQ9CFAXQUP918BTO96';
        break;
    };
}else if(in_array($mobileFiveDigitPrefix ,$mtnAcquiredLinePrefix)){
  switch ($twoDigitRandomGenerator) {
      case 1:
           $SimServerToken  = 'GO2S296C1S8SCNWCWBXC';
        break;
      case 2:
           $SimServerToken  = 'CBAFKH9N5JG8Z3W3EX5Z';
        break;
    };
}else{
  switch ($twoDigitRandomGenerator) {
      case 1:
           $SimServerToken  = 'FO6CSY5ARC17RWR49HZJ';
        break;
      case 2:
           $SimServerToken  = 'RBCQ9CFAXQUP918BTO96';
        break;
    };
}

$messages = 'PLS use '.$customerToken.' as your Cigarette Purchase Number for '.$dates.' Enter it on our Sales Rep MBT App. Contact: 09024255808. Cust No: '.$rows['outlet_id'];
$baseurl = 'https://smartsmssolutions.com/api/json.php';

$payload = [
  'token'=>'osOkg5MP2YaPNnBSLyzr8zIJMFsVnTOjJ5haallVBRWIfqCqrRHviqjlwRqwlXI76e5IecORGEs83q0xBoXXJYPR221WHRMqlVXI',
  'sender'=>'NTERDIST',
  'to'=> $NetworkLine,
  'routing'=>3,
  'message'=> $messages,
  'type'=>0,
  'simserver_token'=>$SimServerToken 
];

$send = $baseurl."?".http_build_query($payload);
$result = file_get_contents($send);
$character = json_decode($result );

if($character->code ==1000) {
  $json =array(
      "status"=>'SUCCESSFUL'
  );
  echo json_encode($json);
}else {
  $json =array(
      "status"=>'FAIL'
  );
  echo  json_encode($json);   
}   


?>
