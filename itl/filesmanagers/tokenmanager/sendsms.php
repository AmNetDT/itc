<?php 
    ini_set('max_execution_time', 0);
    require '../../dbconfig/db.php';
    require '../../query/users.php';
    $db   = new db();
    $conn = $db->connect();
?>

<?php 
        $dates =  date('Y-m-d');
        $time = date("H:i:s"); 
        $sql = "select contactphone, cust_token from outlets where id = ?";

        $stm = $conn->prepare($sql);
        $stm->execute(array($_POST['urno'])); 
        $stmp = $stm->fetch();

        //random 
        $randomForAirtel =  rand(1,8);
        $randomForMtn =  rand(1,2);
        $Servertoken = '';

        //consder network
        $mobileNumbers = substr($stmp['contactphone'],0,4); 
        $arrays = array('0806', '0706', '0903', '0704','0906','0703','0814','0810','0803','0816','0813');

        $token =  $stmp['cust_token'];
        $message = 'PLS use '.$token.' as your Cigarette Purchase Number for '.$dates.' '.$time.'. Enter it on our Sales Rep MBT App. Contact: 09024255808. Cust No: '.$_POST['urno']; 
        $baseurl = 'https://smartsmssolutions.com/api/json.php';


        if(!in_array($mobileNumbers,$arrays)) {
            
            switch ($randomForAirtel) {
               case 1:
                    $Servertoken  = 'NJF8DIBMUX4MDBW646N4';
                 break;
               case 2:
                    $Servertoken  = 'IZ48GXTGHKSMKV8MX981';
                 break;
               case 3:
                    $Servertoken  = 'SR58ZQRFOOKWY57C27UZ';
                 break;
               case 4:
                    $Servertoken  = '91HC39YDCXFPWORR1Y4B';
                 break;
               case 5:
                    $Servertoken  = '56AD3GDPT3OFC4POU5DS';
                 break;
               case 6:
                    $Servertoken  = 'H691MUCRGCRJD13ESTE6';
                 break;
               case 7:
                    $Servertoken  = 'FO6CSY5ARC17RWR49HZJ';
                 break;
               case 8:
                    $Servertoken  = 'RBCQ9CFAXQUP918BTO96';
                 break;
             };
         }else{
           switch ($randomForMtn) {
               case 1:
                    $Servertoken  = 'GO2S296C1S8SCNWCWBXC';
                 break;
               case 2:
                    $Servertoken  = 'CBAFKH9N5JG8Z3W3EX5Z';
                 break;
             };
         }

        $payload = [
            'token'=>'osOkg5MP2YaPNnBSLyzr8zIJMFsVnTOjJ5haallVBRWIfqCqrRHviqjlwRqwlXI76e5IecORGEs83q0xBoXXJYPR221WHRMqlVXI',
            'sender'=>'INTERDIST',
            'to'=> $stmp['contactphone'],
            'routing'=>3,
            'message'=> $message,
            'type'=>0,
	        'simserver_token'=>$Servertoken 
        ];

        $send = $baseurl."?".http_build_query($payload);
        $result = file_get_contents($send);
        $character = json_decode($result );

        if($character->code ==1000) {
            $json =array(
                "status"=>200
            );
            echo  json_encode($json);
        }else {
            $json =array(
                "status"=>300
            );
            echo  json_encode($json);   
        }  
        
?>


