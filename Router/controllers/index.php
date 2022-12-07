<?php

$tasks = $app ['database'] -> quetySelect('user');

require 'view/index.view.php';