<?php

declare(strict_types=1);

Flight::group('/api', static function (): void {
  Flight::route('GET /status', static fn() => Flight::json(['status' => 'ok']));

  Flight::group('/v1', static function (): void {
    //
  });
});
