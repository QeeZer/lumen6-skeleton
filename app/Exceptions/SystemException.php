<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;
use QeeZer\ApiResponder\Contracts\NondisclosureException;

class SystemException extends Exception implements NondisclosureException
{
}
