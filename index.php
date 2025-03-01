<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

$_ENV += (require '.env.php') + (require '.env.dist.php');

Flight::start();
