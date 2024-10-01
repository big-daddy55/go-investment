<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    protected $statement;

    public function __construct($username= 'root', $password='')
    {
        $config = require base_path('config.php');
        $dsn = "mysql:" . http_build_query($config['database'], '', ';');
        $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    /**
     * Execute a query with optional parameters.
     *
     * @param string $query
     * @param array $params
     * @return $this
     */
    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);


        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetch();
    }
    public function find()
    {
        return $this->statement->fetch();
    }

    public function findAll(){
        return $this->statement->fetchAll();
    }

    public function fetchColumn(){
        return $this->statement->fetchColumn();
    }
    public function findOrFail()
    {
        $result = $this->find();

        if(!$result){
            die();
        }
        return $result;
    }

    public function exists($table, $column, $value)
    {
        $stmt = $this->connection->prepare("SELECT COUNT(*) as count FROM $table WHERE $column = :value");
        $stmt->bindParam(':value', $value, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row['count'] > 0;
       
    }

    public function quote($value): string
    {
        return $this->connection->quote($value);
    }

    public function completeProfile($table, $primaryKey, $primaryKeyValue)
    {
        $stmt = $this->connection->prepare("SELECT * FROM $table WHERE $primaryKey = :value");
        $stmt->bindParam(':value', $primaryKeyValue, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if all columns have data
        // Use array_filter to remove all elements that are not empty and not numeric
        $emptyElements = array_filter($row, function ($value) {
            return empty($value) && !is_numeric($value);
        });

        // If the count of empty elements is not zero, it means at least one column is empty or NULL
        if (count($emptyElements) !== 0) {
            return false;
        } else {
            return true; // Add this return statement when all columns have data
        }
    }
}

?>