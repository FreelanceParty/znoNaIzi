<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\ChapterNotFoundException;
use App\Models\Chapter;

/**
 * Class ChapterRepository
 * @package App\ModelControllers\Repositories
 */
class ChapterRepository
{

    public function findById(int $id): Chapter
    {
        $chapter = Chapter::where("id", "=", $id)->first();
        if ($chapter === NULL) {
            throw new ChapterNotFoundException();
        }
        return $chapter;
    }

    public function findByTitle(string $title): Chapter
    {
        $chapter = Chapter::where("title", "=", $title)->first();
        if ($chapter === NULL) {
            throw new ChapterNotFoundException();
        }
        return $chapter;
    }

}
