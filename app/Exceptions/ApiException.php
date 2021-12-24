<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;
use QeeZer\ApiResponder\Contracts\BusinessException;

class ApiException extends Exception implements BusinessException
{
}
