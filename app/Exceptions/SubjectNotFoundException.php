<?php

namespace App\Exceptions;

use Exception;

/**
 * Class SubjectNotFoundException
 * @package App\Exceptions
 */
class SubjectNotFoundException extends Exception
{
    /*** @var string */
    protected $message = 'Subject Not Found';
}
