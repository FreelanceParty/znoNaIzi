<?php

namespace App\ModelControllers;

use App\Exceptions\TestNotFoundException;
use App\ModelControllers\Repositories\TestRepository;
use App\Models\Test;

/**
 * Class TestController
 * @package App\ModelControllers
 */
class TestController
{
    /*** @var TestRepository */
    private TestRepository $repo;

    /*** @return void */
    public function __construct()
    {
        $this->repo = new TestRepository();
    }

    /**
     * @param int $id
     * @return Test
     * @throws TestNotFoundException
     */
    public function findById(int $id): Test
    {
        return $this->repo->findById($id);
    }

}
