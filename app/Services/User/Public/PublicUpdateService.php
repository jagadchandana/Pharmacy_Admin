<?php

namespace App\Services\User\Public;

use App\Repository\Eloquent\User\public\PublicUserRepository;

class PublicUpdateService
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
