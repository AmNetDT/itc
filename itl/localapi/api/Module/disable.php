<?php

include_once '../../App/Classes/init.php';

use App\Classes\Database;
use App\Classes\Validate;
use App\Classes\Helpers\InputHelper;
use App\Classes\Helpers\StringHelper;
use App\Model\EmployeeModule;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (InputHelper::exists('post')) {
        $data = [
            'id',
            '=', 
            InputHelper::get('id')
        ];

        $employee_module = new EmployeeModule();

        if ($res = $employee_module->deleteEmployeeModule($data)) {
            echo json_encode(["status" => 200, "statusmsg" => "module disabled successfully"]);
        } else {                          
            echo json_encode(["status" => 400, "statusmsg" => "module not disabled"]);
            
        }
        
    } else {
        echo json_encode(["status" => 400, "statusmsg" => "missing fields"]);                
    }
} else {
    throw new \Exception("Method not supported", 1);            
}