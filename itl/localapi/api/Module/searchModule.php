<?php

include_once '../../App/Classes/init.php';

use App\Classes\Validate;
use App\Classes\Helpers\InputHelper;
use App\Classes\Helpers\StringHelper;
use App\Model\Employee;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (InputHelper::exists('post')) {
        $postData = $_POST;

        if (count($postData)) {
            $data = [];

            foreach ($postData as $key => $value) {
                $data[$key] = strtolower(InputHelper::get($key));
            }

            if (!empty($postData['first_name']) || !empty($postData['last_name']) || !empty($postData['employee_code']) || !empty($postData['customer_code'])) {
                $employee = new Employee;
                $needs = "id, first_name, last_name, employee_code, customer_code";

                if ($results = $employee->search($needs, $data)) {
                    $str = '';
                    foreach ($results as $result) {
                        $str .= "<tr id='{$result->id}' class='rowOdd modulesDialog route_inv{$result->id}'>";
                        $str .= "<td id='name1' scope='row'>{$result->first_name}</td>";
                        $str .= "<td id='type1'>{$result->last_name}</td>";
                        $str .= "<td id='type1'>{$result->employee_code}</td>";
                        $str .= "<td id='type1'>{$result->customer_code}</td>";
                        $str .= "</tr>";
                    }

                    echo json_encode(["status" => 200, "data" => $str]);                            
                } else {
                    echo json_encode(["status" => 400, "data" => "no match found"]);                            
                }
            } else {
                echo json_encode(["status" => 400, "statusmsg" => "search field can not be empty"]);            
            }
            
        }
        
        
    }
} else {
    throw new \Exception("Method not supported", 1);
}