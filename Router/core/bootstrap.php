<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Route.php';
require 'core/Request.php';

require 'core/database/Connection.php';
require 'core/database/Queries.php';



$app['database'] = new Queries(
    Connection::maker($app['config']['database'])
);