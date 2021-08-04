<?php

include_once '../../App/Classes/init.php';

use App\Classes\Validate;
use App\Classes\Helpers\InputHelper;
use App\Classes\Helpers\StringHelper;
use App\Model\EmployeeModule;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (InputHelper::exists('post')) {
        $data = [
            'employee_id' => InputHelper::get('employee_id'),
            'channel_id' => InputHelper::get('channel_id'),
            'module_id' => InputHelper::get('module_id')
        ];
        $employee_module = new EmployeeModule();

        $check = $employee_module->checkEmployeeModule($data);
        
        if ($check) {
            echo json_encode(["status" => 400, "statusmsg" => "module already enabled for user"]);
        } else {
            if ($res = $employee_module->addEmployeeModule($data)) {
				$lastInsertedID = $employee_module->getEmployeeModule($data);
				
                $result = $employee_module->get($data, $lastInsertedID->id);
				

                $str = '';
                $str .= "<tr id='{$result->id}' class='rowOdd clickModule clickModule{$result->id}'>";
                $str .= "<td>$result->ch</td>";
                $str .= "<td>$result->cm</td>";
                $str .= "<td id='type1'><button class='dlete_mod_remove dlete_mod_rem1' id='{$result->id}'>Delete</button></td>";
                $str .= "</tr>";

            

                echo json_encode(["status" => 200, "data" => $str]);
            } else {                          
                echo json_encode(["status" => 400, "statusmsg" => "module not added"]);
                
            }
        }
        
    } else {
        echo json_encode(["status" => 400, "statusmsg" => "missing fields"]);                
    }
} else {
    throw new \Exception("Method not supported", 1);            
}