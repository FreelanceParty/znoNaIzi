<?php

namespace App\Exceptions;

use Exception;

class ChapterNotFoundException extends Exception
{
    protected $message = "Chapter Not Found";
}
