<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\SubjectNotFoundException;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class SubjectRepository
 * @package App\ModelControllers\Repositories
 */
class SubjectRepository
{
    /**
     * @param int $id
     * @return Subject
     * @throws SubjectNotFoundException
     */
    public function findById(int $id): Subject
    {
        $subject = Subject::where("id", "=", $id)->first();
        if ($subject === NULL) {
            throw new SubjectNotFoundException();
        }
        return $subject;
    }

    /**
     * @param string $title
     * @return Subject
     * @throws SubjectNotFoundException
     */
    public function findByTitle(string $title): Subject
    {
        $subject = Subject::where("title", "=", $title)->first();
        if ($subject === NULL) {
            throw new SubjectNotFoundException();
        }
        return $subject;
    }

	/*** @return Collection */
	public function getAll(): Collection
	{
		return Subject::all();
	}
}