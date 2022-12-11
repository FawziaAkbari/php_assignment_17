<?php 


class QueryBuilder {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function querySelectAll($table, $class) {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table}"); 
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }
}