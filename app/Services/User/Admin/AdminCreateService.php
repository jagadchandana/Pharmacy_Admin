<?php

namespace App\Services\User\Admin;

use App\Repository\Eloquent\User\Admin\AdminUserRepository;
use Illuminate\Support\Facades\Auth;

class AdminCreateService
{
    protected $adminUserRepository;

    /**
     * @param AdminUserRepository $adminUserRepository
     */
    public function __construct(AdminUserRepository $adminUserRepository)
    {
        $this->adminUserRepository = $adminUserRepository;
    }
    /**
     * @param mixed $request
     *
     * @return [type]
     */
    public function update(mixed $array)
    {
       $user = $this->adminUserRepository->findByColumn(['user_id' => Auth::user()->id]);
       return $user->update($array);
    }
}
