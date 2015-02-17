<?php
class database {
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $$database;
    }
    
    public function openConnection() {
        $this->connection = new mysquli($this->host, $this->username, $this->password, $database->database);;
                
                if($this->connection->connect_error) {
                    die("<p>Error: " . $connection->connect_error . "</p>");
                }
                
    }
    
    public function closeConnection() {
        if(isset($this->connection)) {
            $this->connection->close();
        }
    }
    
    public function query($string) {
        $this->openConnection();
        
        $query = $this->coonnection->query();
        
        $this->closeConnnetion();
        
        return $query;
    }
    
        
    }