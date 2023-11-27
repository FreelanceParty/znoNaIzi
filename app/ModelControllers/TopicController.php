<?php

namespace App\ModelControllers;

use App\Exceptions\TopicNotFoundException;
use App\ModelControllers\Repositories\TopicRepository;
use App\Models\Topic;

/**
 * Class TopicController
 * @package App\ModelControllers
 */
class TopicController
{
    /*** @var TopicRepository */
    private TopicRepository $repo;

    /*** @return void */
    public function __construct()
    {
        $this->repo = new TopicRepository();
    }


    /**
     * @param int $id
     * @return Topic
     * @throws TopicNotFoundException
     */
    public function findById(int $id): Topic
    {
        return $this->repo->findById($id);
    }

    /**
     * @param string $title
     * @return Topic
     * @throws TopicNotFoundException
     */
    public function findByTitle(string $title): Topic
    {
        return $this->repo->findByTitle($title);
    }

}
