<?php

namespace App\Model;

use App\Classes\Database;
use App\Classes\Helpers\StringHelper;

class EmployeeModule
{
    private $db;
    private $table = "employee_module";
    
    public function __construct()
    {
        $this->db = Database::getInstance();     
    }

    public function getEmployeeModule($fields)
    {
        $this->db->query("SELECT * FROM $this->table WHERE " . StringHelper::conditionBuilder($fields));

        return $this->db->first();
    }

    public function checkEmployeeModule($fields)
    {
        $this->db->query("SELECT * FROM $this->table WHERE " . StringHelper::conditionBuilder($fields));

        return $this->db->count();
    }

    public function getEmployeeModules($fields)
    {
        $this->db->query("SELECT * FROM $this->table WHERE " . StringHelper::conditionBuilder($fields));

        return $this->db->results();
    }

    public function addEmployeeModule($fields)
    {
        return (!$this->db->insert($this->table, $fields)) ? false : true;
    }

    public function deleteEmployeeModule($fields)
    {
        return (!$this->db->delete($this->table, $fields)) ? false : true;
    }

	public function get($fields, $lastID)
    {
        $sql = "select a.id, b.name as ch, c.name as cm from employee_module a, modules b, channels c where a.employee_id =  {$fields['employee_id']} and a.module_id = b.id and a.channel_id = c.id and a.id = {$lastID}";
        $this->db->query($sql);

        return $this->db->first();
    }
}
