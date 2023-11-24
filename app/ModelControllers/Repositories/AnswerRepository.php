<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\AnswerNotFoundException;
use App\Models\Answer;

/**
 * Class AnswerRepository
 * @package App\ModelControllers\Repositories
 */
class AnswerRepository
{
    /**
     * @param int $id
     * @return Answer
     * @throws AnswerNotFoundException
     */
    public function findById(int $id): Answer
    {
        $subject = Answer::where("id", "=", $id)->first();
        if ($subject === NULL) {
            throw new AnswerNotFoundException();
        }
        return $subject;
    }

}