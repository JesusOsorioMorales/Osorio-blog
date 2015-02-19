<?php

require_once(__DIR__ . "/../model/database.php");

$query = $connection->query("CREATE TABLE posts ("
        . "idint(11) NOT NULL AUTO_INCREMENT,"
        . "title varcher (255 NOT NULL,"
        . "post text NOT NULLL,"
        . "PRIMARY KEY (id))");
if ($query) {
    echo"<p>Succesfully create table: posts</p>";
} else {
    echo "<p>$connection->error</p>";
}