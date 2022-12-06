<?php

namespace App\Http\Livewire;

use App\Http\Controllers\User\UserProfileController;
use App\Repository\Eloquent\User\Admin\AdminUserRepository;
use Livewire\Component;

class UserUpdateForm extends Component
{
    protected $UserProfileController;
    protected $adminUserRepository;
    public $user = [];

    /**
     * @return [type]
     */
    public function render()
    {
        return view('pages.users.components.user-update-form');
    }
    /**
     * @param UserProfileController $UserProfileController
     *
     * @return [type]
     */
    public function boot(UserProfileController $UserProfileController, AdminUserRepository $adminUserRepository)
    {
        $this->UserProfileController = $UserProfileController;
        $this->adminUserRepository = $adminUserRepository;
        $this->user = $this->adminUserRepository->findById(auth()->user()->id);
    }
    /**
     * @return [type]
     */
    public function rules()
    {
        return [
            'user.first_name' => 'required|string|max:255',
            'user.last_name' => 'required|string|max:255',
            'user.email' => 'required|string|email|max:255|unique:users,email,'.auth()->user()->id,
            'user.phone' => 'required|string|max:255',
            'user.address' => 'required|string|max:255',
            'user.city' => 'required|string|max:255',
            'user.state' => 'required|string|max:255',
            'user.zip' => 'required|string|max:255',
        ];
    }
    /**
     * @return [type]
     */
    public function messages()
    {
        return [
            'user.first_name.required' => 'First name is required',
            'user.last_name.required' => 'Last name is required',
            'user.email.required' => 'Email is required',
            'user.email.unique' => 'Email already exists',
            'user.email.email' => 'Email is not valid',
            'user.phone.required' => 'Phone is required',
            'user.address.required' => 'Address is required',
            'user.city.required' => 'City is required',
            'user.state.required' => 'State is required',
            'user.zip.required' => 'Zip is required',
        ];
    }
    /**
     * @param mixed $propertyName
     *
     * @return [type]
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    /**
     * @return [type]
     */
    public function edit()
    {
        $this->validate();
        $this->UserProfileController->edit($this->user);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Profile updatesSuccessful."
        ]);
    }
}
