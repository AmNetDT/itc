<?php

include_once '../../App/Classes/init.php';

use App\Classes\Validate;
use App\Classes\Helpers\InputHelper;
use App\Classes\Helpers\StringHelper;
use App\Model\Employee;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (InputHelper::exists('post')) {

        $postData = $_POST;
        $data = [];

        $validate = new Validate();
        $validation = $validate->check($postData, [
            'employee_code' => [
                'name' => 'Employee code',
                'unique' => 'employees'
            ],
            'phone_imei' => [
                'name' => 'Phone imei',
                'unique' => 'employees'
            ],
            'customer_code' => [
                'name' => 'Customer Number',
                'required' => true
            ]
        ]);

        if ($validation->passed()) {
            foreach ($postData as $key => $value) {
                if ($key == 'password' & empty(trim($value))) {
                    continue;
                }

                $data[$key] = InputHelper::get($key);
            }
            $employee = new Employee();

            if ($result = $employee->update($postData['id'], $data)) {
                echo json_encode(["status" => 200, "statusmsg" => "user updated successfully"]);
            } else {
                echo json_encode(["status" => 400, "statusmsg" => "user not created"]);
            }
        } else {
            echo json_encode(["status" => 400, "statusmsg" => $validation->errors()]);            
        }
        
    }
} else {
    throw new \Exception("Method not supported", 1);
}
