<?php

class DB
{
    public static function InstanceDB()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        return new PDO("mysql:host=$servername;dbname=database", $username, $password);
    }
}
