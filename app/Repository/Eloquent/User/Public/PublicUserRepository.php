<?php

namespace App\Repository\Eloquent\User\public;

use App\Models\UserMeta\PublicUserMeta;
use App\Repository\Base\BaseRepository;
use App\Repository\Interfaces\User\Public\PublicUserRepositoryInterface;

class PublicUserRepository extends BaseRepository implements PublicUserRepositoryInterface
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
    public function __construct(PublicUserMeta $model)
    {
        $this->model = $model;
    }
}
