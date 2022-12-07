<?php

$config = require 'config.php';

require 'database/Connection.php';
require 'database/Queries.php';

return new Queries(Connection::maker($config['database']));