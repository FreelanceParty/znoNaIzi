<?php

namespace App\Exceptions;

use Exception;

class TestNotFoundException extends Exception
{
    /*** @var string */
    protected $message = 'Test Not Found';
}
