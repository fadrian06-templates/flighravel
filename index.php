<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

$_ENV += (require '.env.php') + (require '.env.dist.php');

Flight::set('flight.views.path', 'resources/views');
Flight::view()->preserveVars = false;

Flight::start();
