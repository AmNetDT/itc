<?php

namespace App\Classes;

use App\Classes\Database as Database;
use App\Classes\Helpers\InputHelper as InputHelper;

class Validate
{

    private $db,
        $passed = false,
        $errors = array();

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function check($source, array $items)
    {
        foreach ($items as $item => $rules) {
            foreach ($rules as $rule => $rule_value) {
                if (isset($source[$item])) {
                    $value = InputHelper::sanitize(trim($source[$item]));                    
                } else {
                    $value = null;
                }

            $rule_value = InputHelper::sanitize($rule_value);

                if ($rule === 'required' && empty($value)) {
                    $this->addError("{$rules['name']} is required");
                } elseif (!empty($value)) {
                    switch ($rule) {
                        case 'integer':
                            if (!is_numeric($value)) {
                                $this->addError("{$rules['name']} must be a number.");
                            }
                            break;
                        case 'string':
                            if (!is_string($value)) {
                                $this->addError("{$rules['name']} must be a string.");
                            }
                            break;
                        case 'email':
                            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                                $this->addError("{$rules['name']} must be a valid email pattern.");
                            }
                            break;
                        case 'unique':
                            $check = $this->db->get($rule_value, array($item, '=', $value));
                            if ($check->count()) {
                                $this->addError("{$rules['name']} already exists.");
                            }
                            break;
                    }
                }
            }
        }

        if (empty($this->errors)) {
            $this->passed = true;
        }

        return $this;
    }

    private function addError($message)
    {
        $this->errors[] = $message;
    }

    public function errors()
    {
        return $this->errors;
    }

    public function passed()
    {
        return $this->passed;
    }
}
