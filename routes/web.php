<?php

declare(strict_types=1);

Flight::route('GET /', static function (): void {
  Flight::render('pages/index');
});
