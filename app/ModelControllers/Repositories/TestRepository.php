<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\TestNotFoundException;
use App\Models\Test;

/**
 * Class TestRepository
 * @package App\ModelControllers\Repositories
 */
class TestRepository
{

    /**
     * @param int $id
     * @return Test
     * @throws TestNotFoundException
     */
    public function findById(int $id): Test
    {
        $test = Test::where("id", "=", $id)->first();
        if ($test === NULL) {
            throw new TestNotFoundException();
        }
        return $test;
    }

}
