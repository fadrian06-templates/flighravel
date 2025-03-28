<?php

declare(strict_types=1);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta name="color-scheme" content="dark light" />
  <title><?= $_ENV['APP_NAME'] ?></title>
  <base href="<?= str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) ?>" />
  <link rel="icon" href="./resources/images/favicon.svg" />
  <link rel="stylesheet" href="./resources/dist/index.css" />
</head>

<body>
  Edit&nbsp;<code><?= __FILE__ ?></code>

  <script src="./resources/dist/index.js"></script>
</body>

</html>
