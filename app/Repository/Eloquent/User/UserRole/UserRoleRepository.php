<?php

namespace App\Repository\Eloquent\User\UserRole;

use App\Models\UserRole;
use App\Repository\Base\BaseRepository;
use App\Repository\Interfaces\User\UserRole\UserRoleRepositoryInterface;

class UserRoleRepository extends BaseRepository implements UserRoleRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param  Model  $model
     */
    public function __construct(UserRole $model)
    {
        $this->model = $model;
    }
}
