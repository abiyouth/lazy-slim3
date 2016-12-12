<?php

// Include plugins installed with composer.

require __DIR__ . '/vendor/autoload.php';

// Create new Slim app with custom config.

$config = require __DIR__ . '/app/config.php';
$app = new Slim\App( $config );

// Include middleware and routes.

require __DIR__ . '/app/middleware.php';
require __DIR__ . '/app/routes.php';

// Run application. See docs for more details.

$app->run();

?>
