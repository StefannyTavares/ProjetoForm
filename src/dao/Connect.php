<?php

class Connect
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');
    }

    public function getConn(): PDO
    {
        return $this->conn;
    }
}