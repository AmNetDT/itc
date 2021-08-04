<?php

namespace App\Classes;

class Database
{
    private $pdo,
        $query,
        $error = false,
        $results,
        $count = 0;
    private static $instance = null;
    

    private function __construct()
    {

        try {
            $this->pdo = new \PDO(
                'pgsql:host=' . Config::get('pgsql/host') . '; dbname=' .
                    Config::get('pgsql/db'),
                Config::get('pgsql/username'),
                Config::get('pgsql/password')
            );

            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function query($sql, $params = null)
    {
        $this->error = false;

        if ($this->query = $this->pdo->prepare($sql)) {
            if ($params) {
                $x = 1;
                foreach ($params as $param) {
                    $this->query->bindValue($x, $param);
                    $x++;
                }
            }
            if ($this->query->execute()) {
                if ($this->query->rowCount() != null) {
                    $this->results = $this->query->fetchAll(\PDO::FETCH_OBJ);
                    $this->count = $this->query->rowCount();
                }   
            } else {
                $this->error = true;
            }
        }
        return $this;
    }

    public function insert($table, $fields)
    {
        if (count($fields)) {
            $keys = array_keys($fields);
            $values = null;
            $x = 1;

            foreach ($fields as $field) {
                $values .= '?';
                if ($x < count($fields)) {
                    $values .= ', ';
                }
                $x++;
            }
            $sql = "INSERT INTO $table (" . implode(', ', $keys) . ") VALUES ({$values})";

            if (!$this->query($sql, $fields)->error()) {
                return true;
            }
        }

        return false;
    }

    public function update($table, $id, $fields)
    {
        $set = '';
        $x = 1;

        foreach ($fields as $name => $value) {
            $set .= "{$name} = ?";
            if ($x < count($fields)) {
                $set .= ', ';
            }

            $x++;
        }

        $sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";

        if (!$this->query($sql, $fields)->error()) {
            return true;
        }

        return false;
    }

    public function error()
    {
        return $this->error;
    }

    public function results()
    {
        return $this->results;
    }

    public function count()
    {
        return $this->count;
    }

    public function first()
    {
        return (count($this->results())) ? $this->results()[0] : NULL;
    }

    public function get($table, array $where)
    {
        return $this->action('SELECT *', $table, $where);
    }

    public function action($action, $table, $where)
    {
        if (count($where) === 3) {
            $operators = array('=', '>', '<', '>=', '<=');

            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            if (in_array($operator, $operators)) {
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";

                if (!$this->query($sql, array($value))->error()) {
                    return $this;
                }
            }
        }
        return false;
    }

    public function delete($table, $where)
    {
        return $this->action('DELETE', $table, $where);
    }
	
	public function search($table, $needs, $where)
	{
		$sql = "SELECT {$needs} FROM {$table} WHERE ";
		$x = 1;
		
		$newArray = array_filter($where, function ($item) { return $item != ''; });
		
		foreach ($newArray as $key => $value) {
			if ($value == '') {
				$value = 0;
			}
			$sql .= " lower({$key}) LIKE '%{$value}%'";
			if ($x < count($newArray)) {
				$sql .= " OR ";
			}
			
			$x++;
		}
		
		return (!$this->query($sql)->error()) ? $this->results() : null;
		
	}
}