<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Repository\Eloquent\User\Admin\AdminUserRepository;
use App\Repository\Eloquent\User\UserRole\UserRoleRepository;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    protected $adminUserRepository;
    protected $userRoleRepository;
    /**
     * @param AdminUserRepository $adminUserRepository
     * @param UserRoleRepository $userRoleRepository
     */
    public function __construct(AdminUserRepository $adminUserRepository, UserRoleRepository $userRoleRepository)
    {
        $this->adminUserRepository = $adminUserRepository;
        $this->userRoleRepository = $userRoleRepository;
    }
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->first_name.' '.$request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $this->adminUserRepository->create([
            'user_id' => $user->id,
           'role_id' => $this->userRoleRepository->findByColumn(['slug' => 'admin'])->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
