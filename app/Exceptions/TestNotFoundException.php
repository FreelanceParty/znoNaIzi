<?php

namespace App\Exceptions;

use Exception;

/**
 * Class TestNotFoundException
 * @package App\Exceptions
 */
class TestNotFoundException extends Exception
{
    /*** @var string */
    protected $message = 'Test Not Found';
}
