<?php

namespace App\Services\User\Admin;

use App\Repository\Eloquent\User\Admin\AdminUserRepository;

class AdminDeleteService
{
    protected $adminUserRepository;

    /**
     * @param AdminUserRepository $adminUserRepository
     */
    public function __construct(AdminUserRepository $adminUserRepository)
    {
        $this->adminUserRepository = $adminUserRepository;
    }
}
