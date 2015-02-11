<?php
    require_once(__DIR__ . "/../model/database.php");
    
    $connection = new mysqli ($host, $username, $password);
    
    if($connection->connect_error) {
        die("<p>Error: " . $connection->connect_error . "</p>");
    }
    
    $exist = $connection->select_db($database);
    
    if (!$exists) {
        $query = $connection->query("CREATE DATABASE $database");
        
        if ($query) {
            echo"<p>Successfully created database:  " . $database . "</p>";
        }
    }
    else {
        echo "Database already exists";
    }
    
    $query = $connection->query("CREATE TABLE posts ("
            ."idint(11) NOT NULL AUTO_INCREMENT,"
            ."title varcher (255 NOT NULL,"
            ."post text NOT NULLL,"
            ."PRIMARY KEY (id))");
            
    if($query) {
        echo"<p>Succesfully create table: posts</p>";
    }
    else {
        echo "<p>$connection->>error</p>";
    }
    
    $connection->close();