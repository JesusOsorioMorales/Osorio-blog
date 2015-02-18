<?php
require_once(__DIR__ . "/database.php");
$path = "/Osorio-blog/";

    $host = "localhost";
    $username = "root";
    $password = "root";  
    $database = "blog_db";
    
    $connection = new database($host, $username, $password, $database);