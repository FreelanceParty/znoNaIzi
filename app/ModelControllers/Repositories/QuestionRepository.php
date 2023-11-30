<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\QuestionNotFoundException;
use App\Models\Question;

/**
 * Class QuestionRepository
 * @package App\ModelControllers\Repositories
 */
class QuestionRepository
{
    /**
     * @param int $id
     * @return Question
     * @throws QuestionNotFoundException
     */
    public function findById(int $id): Question
    {
        $question = Question::where("id", "=", $id)->first();
        if ($question === NULL) {
            throw new QuestionNotFoundException();
        }
        return $question;
    }

}
