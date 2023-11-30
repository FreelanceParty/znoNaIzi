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
        $answer = Answer::where("id", "=", $id)->first();
        if ($answer === NULL) {
            throw new AnswerNotFoundException();
        }
        return $answer;
    }

}
