<?php
/**
 * Created by PhpStorm.
 * User: laugusto
 * Date: 9/16/17
 * Time: 8:42 PM
 */

namespace Loja;

require_once __DIR__.'/../vendor/autoload.php';

$config = require __DIR__.'/../app/config/config.php';

$app = new \Slim\App($config);

require __DIR__.'/../app/config/dependencies.php';
require __DIR__.'/../app/config/routes.php';

$app->run();
