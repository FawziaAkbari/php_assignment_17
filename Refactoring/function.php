<?php


function connnectionToDB() {
    try {
        return new PDO('mysql:host=localhost;dbname=users2','root','');
    }
    catch (PDOException $e) {
        die('Error : ' . $e->getMessage());
    }
    
}

function fetchAllTasks($pdo) {

    $stmt = $pdo->prepare('SELECT * FROM user'); 
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');
}