<?php

require 'core/bootstrap.php';

$router = new Route;
require 'router.php';

require Route::load('router.php')
->direct(Request::uri());

// $tasks = $database->quetySelect('user');
// echo "<pre>";
// var_dump($tasks);