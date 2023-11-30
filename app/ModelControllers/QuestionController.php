<?php

namespace App\ModelControllers;

use App\Exceptions\AnswerNotFoundException;
use App\Exceptions\QuestionNotFoundException;
use App\ModelControllers\Repositories\AnswerRepository;
use App\ModelControllers\Repositories\QuestionRepository;
use App\Models\Answer;
use App\Models\Question;

/**
 * Class QuestionController
 * @package App\ModelControllers
 */
class QuestionController
{
    /*** @var QuestionRepository */
    private QuestionRepository $repo;

    /*** @return void */
    public function __construct()
    {
        $this->repo = new QuestionRepository();
    }

    /**
     * @param int $id
     * @return Question
     * @throws QuestionNotFoundException
     */
    public function findById(int $id): Question
    {
        return $this->repo->findById($id);
    }

}
