<?php

namespace App\Repositories;

use App\Repositories\Model\User;

class UserRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new User();
    }
}
