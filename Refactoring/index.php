<?php

require 'Task.php';

require 'bootstrapt.php';

$tasks = $query->querySelectAll('user', 'Task');
echo "<pre>";
var_dump($tasks);
require 'view.php';


