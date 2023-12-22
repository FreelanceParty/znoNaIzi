<?php

namespace App\Exceptions;

use Exception;

/**
 * Class ChapterNotFoundException
 * @package App\Exceptions
 */
class ChapterNotFoundException extends Exception
{
	/*** @var string */
	protected $message = "Chapter Not Found";
}
