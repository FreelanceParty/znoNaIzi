<?php

namespace App\ModelControllers;

use App\Exceptions\ChapterNotFoundException;
use App\ModelControllers\Repositories\ChapterRepository;
use App\Models\Chapter;

/**
 * Class ChapterController
 * @package App\ModelControllers
 */
class ChapterController
{
    /*** @var ChapterRepository */
    private ChapterRepository $repo;

    /*** @return void */
    public function __construct()
    {
        $this->repo = new ChapterRepository();
    }

    /**
     * @param int $id
     * @return Chapter
     * @throws ChapterNotFoundException
     */
    public function findById(int $id): Chapter
    {
        return $this->repo->findById($id);
    }

    /**
     * @param int $title
     * @return Chapter
     * @throws ChapterNotFoundException
     */
    public function findByTitle(int $title): Chapter
    {
        return $this->repo->findByTitle($title);
    }

}
