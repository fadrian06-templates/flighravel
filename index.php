<?php

require_once 'vendor/autoload.php';
require_once 'routes/web.php';
require_once 'routes/api.php';

$_ENV += (require '.env.php') + (require '.env.dist.php');

Flight::set('flight.views.path', 'resources/views');
Flight::view()->preserveVars = false;

Flight::start();
