<?php

include_once '../../App/Classes/init.php';

use App\Classes\Validate;
use App\Classes\Helpers\InputHelper;
use App\Classes\Helpers\StringHelper;
use App\Model\Employee;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (InputHelper::exists('post')) {
        $validate = new Validate();
        $validation = $validate->check($_POST, [
        
        'username' => [
            'name' => 'Username',
            'required' => true,
            'string' => true,
            'unique' => 'employees'
        ],
        'employee_code' => [
            'name' => 'Employee code',
            'required' => true,
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
            $data = [
                'first_name' => StringHelper::capFirst(InputHelper::get('first_name')),
                'last_name' => StringHelper::capFirst(InputHelper::get('last_name')),
                'middle_name' => StringHelper::capFirst(InputHelper::get('middle_name')),
                'dynamic_dbroute' => InputHelper::get('dynamic_dbroute'),
                'customer_code' => InputHelper::get('customer_code'),
                'username' => InputHelper::get('username'),
                'password' => InputHelper::get('password'),
                'user_status' => InputHelper::get('user_status'),
                'email' => InputHelper::get('email'),
                'phone_no' => InputHelper::get('phone_no'),
                'employee_code' => InputHelper::get('employee_code'),
                'depots_id' => InputHelper::get('depots_id'),
                'vehicle_id' => InputHelper::get('vehicle_id'),
                'division_id' => InputHelper::get('division_id'),
                'call_frequency_id' => NULL,
                'phone_fa_code' => InputHelper::get('phone_fa_code'),
                'phone_imei' => InputHelper::get('phone_imei'),
                'imei_waiver' => false,
                'device_brands_id' => InputHelper::get('device_brands_id'),
                'phone_status' => InputHelper::get('phone_status'),
                'bike_fa_code' => InputHelper::get('bike_fa_code'),
                'bike_staus_id' => InputHelper::get('bike_staus_id'),
                'entry_date' => date("Y-m-d H:i:s"),
                'depots_waiver' => false
            ];

            $employee = new Employee();

                if ($result = $employee->create($data)) {
                    echo json_encode(["status" => 200, "statusmsg" => "user created successfully"]);
                } else {                          
                    echo json_encode(["status" => 400, "statusmsg" => "user not created"]);
                    
                }
        } else {
            echo json_encode(["status" => 400, "statusmsg" => $validation->errors()]);
            
        }
    } else {
        echo json_encode(["status" => 400, "statusmsg" => "missing fields"]);                
    }
} else {
    throw new \Exception("Method not supported", 1);
}

