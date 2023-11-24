<?php

namespace App\Exceptions;

use Exception;

/**
 * Class AnswerNotFoundException
 * @package App\Exceptions
 */
class AnswerNotFoundException extends Exception
{
    /*** @var string */
    protected $message = 'Answer Not Found';
}
