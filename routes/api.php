<?php

declare(strict_types=1);

use Laravel\Lumen\Routing\Router;

/*
 * @var Router $router
 */

if (! isset($router)) {
    $router = null;
}

$router->get('/', 'ExampleController@lumenVersion');
