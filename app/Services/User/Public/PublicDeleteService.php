<?php

namespace App\Services\User\Public;

use App\Repository\Eloquent\User\public\PublicUserRepository;

class PublicDeleteService
{
    protected $publicUserRepository;

    /**
     * @param PublicUserRepository $publicUserRepository
     */
    public function __construct(PublicUserRepository $publicUserRepository)
    {
        $this->publicUserRepository = $publicUserRepository;
    }
}
