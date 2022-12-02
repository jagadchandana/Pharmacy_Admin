<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repository\Eloquent\User\Admin\AdminUserRepository;
use App\Services\User\Admin\AdminCreateService;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    protected $adminCreateService;
    protected $adminUserRepository;
    /**
     * @param AdminCreateService $adminUserCreateService
     */
    public function __construct(AdminCreateService $adminCreateService, AdminUserRepository $adminUserRepository)
    {
        $this->adminCreateService = $adminCreateService;
        $this->adminUserRepository = $adminUserRepository;
    }

   /**
    * @return [type]
    */
   public function index()
   {
      return view('pages.users.user-profile');
   }
   /**
    * @return [type]
    */
   public function getUser()
   {
      return $this->adminUserRepository->findByColumn(['user_id' => auth()->user()->id]);
   }
   /**
    * @param Request $request
    *
    * @return [type]
    */
   public function edit(array $array)
   {
       return $this->adminCreateService->update($array);
   }
}
