<?php

namespace App\ModelControllers;

use App\Exceptions\SubjectNotFoundException;
use App\ModelControllers\Repositories\SubjectRepository;
use App\Models\Subject;

/**
 * Class SubjectController
 * @package App\ModelControllers
 */
class SubjectController
{
    /*** @var SubjectRepository */
    private SubjectRepository $repo;

    /*** @return void */
    public function __construct()
    {
        $this->repo = new SubjectRepository();
    }

    /**
     * @param int $id
     * @return Subject
     * @throws SubjectNotFoundException
     */
    public function findById(int $id): Subject
    {
        return $this->repo->findById($id);
    }

    /**
     * @param string $title
     * @return Subject
     * @throws SubjectNotFoundException
     */
    public function findByTitle(string $title): Subject
    {
        return $this->repo->findByTitle($title);
    }

}