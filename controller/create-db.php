<?php

require_once(__DIR__ . "/../model/database.php");

$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
        . "idint(11) NOT NULL AUTO_INCREMENT,"
        . "title varcher (255 NOT NULL,"
        . "post text NOT NULLL,"
        . "PRIMARY KEY (id))");

    if ($query) {
        echo"<p>Successfully created table: posts</p>";
    } 
    else {
        echo"<p>" . $_SESSION["connection"]->error . "</p>";
    }
    
    $query = $_SESSION["connection"]->query("CREATE TABLE users {"
           . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username varcher(30) NOT NULL,"
            . "email varcher(50) NOT NULL,"
            . "password char(128) NOT NULL,"
            . "salt char(128)NOT NULL,"
            . "PRIMARY KEY(id))");
    
    if($query) {
        echo "<p>Successfully created table: users</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
            
             