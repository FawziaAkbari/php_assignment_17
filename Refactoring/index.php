<?php



require 'function.php';
require 'Task.php';

$pdo = connnectionToDB();

$tasks = fetchAllTasks($pdo);


require 'view.php';


