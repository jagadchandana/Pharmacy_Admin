<?php

namespace App\Repository\Eloquent\User\Admin;

use App\Models\UserMeta\AdminUserMeta;
use App\Repository\Base\BaseRepository;
use App\Repository\Interfaces\User\Admin\AdminUserRepositoryInterface;

class AdminUserRepository extends BaseRepository implements AdminUserRepositoryInterface
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
    public function __construct(AdminUserMeta $model)
    {
        $this->model = $model;
    }
}
