<?php

class Database {
    private $connection;
    private static $db;

    public static function getInstance() {
        if (self::$db == null)
            self::$db = new Database();
        return self::$db;
    }

    public function __construct() {
        global $config;
        $this->connection = new mysqli("localhost", "frb173316_d", "@ADKGH2kq2ea2\$llp;06j3#", "frb173316_d");

        if ($this->connection->connect_error) {
            throw new Exception("Connection failed ! Connection error code : ".$this->connection->connect_error);
        }

        return $this->connection;
    }

    private function safeQuery($sql, $data) {
        $count = 0;
        foreach ($data as $value) {
            $value = $this->connection->real_escape_string($value);
            $sql = str_replace('?'.$count++, $value, $sql);
            $sql = str_replace('<', "&lt", $sql);
            $sql = str_replace('>', "&gt", $sql);
        }
        
        return $this->connection->query($sql);
    }

    public function input($sql, $data = array()) {
        $result = $this->safeQuery($sql, $data);

        if (!$result)
            throw new Exception("Query ".$sql." failed ! ".mysqli_error($this->connection));

        return $result;
    }

    public function output($sql, $data = array(), $first = false) {
        $result = $this->safeQuery($sql, $data);

        if (!$result)
            throw new Exception("Query ".$sql." failed ! ".mysqli_error($this->connection));

        if ($result->num_rows == 0)
            return null;

        if ($first)
            return $result->fetch_assoc();

        while ($record = $result->fetch_assoc()) {
            $records[] = $record;
        }

        return $records;
    }

    public function modify($sql, $data = array()) {
        $result = $this->safeQuery($sql, $data);

        if (!$result)
            throw new Exception("Query ".$sql." failed ! ".mysqli_error($this->connection));

        return $result;
    }
}