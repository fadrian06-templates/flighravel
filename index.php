<?php

declare(strict_types=1);

use flight\Container;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/routes/web.php';
require_once __DIR__ . '/routes/api.php';

$_ENV += (require '.env.php') + (require '.env.dist.php');

$container = new Container();

$container->singleton(PDO::class, static fn(): PDO => new PDO(
  match (strtolower((string) $_ENV['DB_CONNECTION'])) {
    'sqlite' => 'sqlite:'
      . __DIR__
      . '/database/'
      . ($_ENV['DB_DATABASE'] ?? 'flighravel')
      . '.db',
    'mysql' => 'mysql:host='
      . $_ENV['DB_HOST']
      . ';dbname='
      . $_ENV['DB_DATABASE']
      . ';port='
      . $_ENV['DB_PORT'],
  },
  $_ENV['DB_USERNAME'] ?? null,
  $_ENV['DB_PASSWORD'] ?? null,
));

Flight::registerContainerHandler($container->get(...));

Flight::set('flight.views.path', 'resources/views');
Flight::view()->preserveVars = false;

Flight::start();
