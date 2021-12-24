<?php

declare(strict_types=1);

use Laravel\Lumen\Routing\Router;

/*
 * @var Router $router
 */

$router->get('/', 'ExampleController@lumenVersion');
