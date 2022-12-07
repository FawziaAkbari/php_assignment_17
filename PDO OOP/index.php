<?php

$database = require 'bootstrap.php';

$tasks = $database->quetySelect('user');
echo "<pre>";
var_dump($tasks);