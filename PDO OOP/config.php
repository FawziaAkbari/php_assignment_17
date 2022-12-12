<?php

return [
    'database' => [
        'connection' => 'mysql:host=localhost',
        'dbname' =>'users2',
        'username' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

    ]
];

// $config['database'];