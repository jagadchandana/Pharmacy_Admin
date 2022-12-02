<?php

namespace App\Repository\Eloquent\User;

use App\Models\User;
use App\Repository\Base\BaseRepository;
use App\Repository\Interfaces\User\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
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
    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
