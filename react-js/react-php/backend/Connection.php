<?php

class Connection
{
    public static function getDb()
    {
        $conn = new PDO(
            "mysql:host=localhost;dbname=recode;charset=utf8",
            "root",
            ""
        );

        if ($conn) {
            return $conn;
        } else {
            echo "<h1>Erro ao realizar conexão</h1>";
        }
    }
}