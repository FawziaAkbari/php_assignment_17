<?php

require 'Task.php';

try {
    $dbh= new PDO('mysql:host=localhost;dbname=users2','root','');
}
catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}

// var_dump($dbh);    // gives : object(PDO)#1 (0) { }

// $res=$dbh->query('SELECT * FROM user');
// var_dump($res);
// $result = $res->fetchAll(PDO::FETCH_OBJ);
// var_dump($result);


// $sql = "SELECT * FROM user";
$stmt = $dbh->prepare("SELECT * FROM user"); 
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');
// echo "<pre>";

// var_dump($tasks);

require 'view.php';


