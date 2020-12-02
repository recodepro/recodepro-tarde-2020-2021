<?php

require "Connection.php";

class Student
{
    public $id;
    public $name;
    public $telphone;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function registerStudent()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("INSERT INTO students (name, telphone) values ('$this->name', '$this->telphone')");                      
        
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}