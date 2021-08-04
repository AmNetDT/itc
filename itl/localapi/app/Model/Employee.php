<?php

namespace App\Model;
use App\Classes\Database;

class Employee
{
    private $db;
    private $table = "employees";
    
    public function __construct()
    {
        $this->db = Database::getInstance();     
    }

    
    public function create($fields)
    {
        return (!$this->db->insert($this->table, $fields)) ? false : true;
    }

    public function update($id, $fields)
    {
        return (!$this->db->update($this->table, $id, $fields)) ? false : true;
    }
	
	public function search($needs, $fields)
    {
        return $this->db->search($this->table, $needs, $fields);
    }
}
