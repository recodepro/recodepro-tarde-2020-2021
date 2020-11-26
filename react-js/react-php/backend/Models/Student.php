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
}
