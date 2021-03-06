<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;
use QeeZer\ApiResponder\Contracts\NondisclosureException;

class SystemException extends Exception implements NondisclosureException
{
    public function __construct(Exception $exception)
    {
        parent::__construct($exception->getMessage(), $exception->getCode(), $exception->getPrevious());
    }
}
