<?php

class database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    // private $error;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;


       //public function openConnection() {

        $this->connection = new mysquli($host, $username, $password);

        if ($this->connection->connect_error) {
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }

        if (!$exist) {
            $query = $this->connection->query("CREATE DATABASE $database");

            if ($query) {
                echo"<p>Successfully created database:  " . $database . "</p>";
            }
        } else {
            echo "Database already exists";
        }
    }

    public function closeConnection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->openConnection();

        $query = $this->connection->query();

        if (!query) {
            $this->error = $this->connection->error;
        }

        $this->closeConnnetion();

        return $query;
    }

}
