<?php

namespace App\Exceptions;

use Exception;

/**
 * Class SubjectNotFoundException
 * @package App\Exceptions
 */
class TopicNotFoundException extends Exception
{
    /*** @var string */
    protected $message = 'Topic Not Found';
}
