<?php

namespace App\ModelControllers;

use App\Exceptions\AnswerNotFoundException;
use App\ModelControllers\Repositories\AnswerRepository;
use App\Models\Answer;

/**
 * Class AnswerController
 * @package App\ModelControllers
 */
class AnswerController
{
    /*** @var AnswerRepository */
    private AnswerRepository $repo;

    /*** @return void */
    public function __construct()
    {
        $this->repo = new AnswerRepository();
    }

    /**
     * @param int $id
     * @return Answer
     * @throws AnswerNotFoundException
     */
    public function findById(int $id): Answer
    {
        return $this->repo->findById($id);
    }

}