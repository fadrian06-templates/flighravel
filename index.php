<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/routes/web.php';
require_once __DIR__ . '/routes/api.php';

$_ENV += (require '.env.php') + (require '.env.dist.php');

Flight::set('flight.views.path', 'resources/views');
Flight::view()->preserveVars = false;

Flight::start();
