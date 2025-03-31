<?php

class Database {
    public $connection;

    public function __construct($config, $username = 'root', $passsword = '') {


        $dsn ='mysql:' . http_build_query($config, '', ';'); // host=localhost;port=3306;dbname=myapp

        $this->connection = new PDO($dsn, $username, $passsword,  [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query ($query) {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        
        // return $statement->fetch(PDO::FETCH_ASSOC);
        return $statement;
        
    }
}
