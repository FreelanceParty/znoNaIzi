<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\TopicNotFoundException;
use App\Models\Topic;

/**
 * Class TopicRepository
 * @package App\ModelControllers\Repositories
 */
class TopicRepository
{

    /**
     * @param int $id
     * @return Topic
     * @throws TopicNotFoundException
     */
    public function findById(int $id): Topic
    {
        $topic = Topic::where("id", "=", $id)->first();
        if ($topic === NULL) {
            throw new TopicNotFoundException();
        }
        return $topic;
    }

    /**
     * @param string $title
     * @return Topic
     * @throws TopicNotFoundException
     */
    public function findByTitle(string $title): Topic
    {
        $topic = Topic::where("title", "=", $title)->first();
        if ($topic === NULL) {
            throw new TopicNotFoundException();
        }
        return $topic;
    }
}



