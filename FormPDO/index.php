<?php

require 'core/bootstrap.php';

require Route::load('router.php')->direct(Request::uri(), Request::method());