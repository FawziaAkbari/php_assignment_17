<?php

$database = require 'bootstrap.php';
require 'Task.php';

$tasks = $database->quetySelect('user','Task');
echo "<pre>";
var_dump($tasks);
echo "</pre>";

require 'view.php';