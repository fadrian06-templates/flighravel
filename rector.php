<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
  ->withPaths([
    __DIR__ . '/app',
    __DIR__ . '/resources/views',
    __DIR__ . '/routes',
    __DIR__ . '/tests',
    __DIR__ . '/index.php',
    __DIR__ . '/.env.dist.php',
    __DIR__ . '/.env.php',
  ])
  ->withRootFiles()
  ->withSkipPath(__DIR__ . '/vendor')
  ->withPhpSets(php82: true)
  ->withPreparedSets(
    typeDeclarations: true,
    rectorPreset: true,
  )
  ->withRules([]);
