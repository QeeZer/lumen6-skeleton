<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Application;

class ExampleController extends Controller
{
    public function lumenVersion(Request $request, Application $app): string
    {
        return $app->version();
    }
}
