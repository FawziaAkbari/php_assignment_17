<?php

class Queries {
    public $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function quetySelect($table_name, $class){
        $query = "select * from $table_name";
        $result = $this->pdo->prepare($query);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_CLASS, $class);
    }
 
} 