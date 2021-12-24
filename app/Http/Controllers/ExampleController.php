<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Laravel\Lumen\Application;

class ExampleController extends Controller
{
    public function lumenVersion(Request $request, Application $app): string
    {
        return $app->version();
    }
}
