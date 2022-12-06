<?php

namespace App\Http\Livewire;

use App\Repository\Eloquent\User\Admin\AdminUserRepository;
use App\Repository\Eloquent\User\UserRepository;
use Livewire\Component;

class DataTable extends Component
{
    protected $userRepository;
    public $user;

    public function render()
    {
        return view('pages.users.components.data-table');
    }
    /**
     * @return [type]
     */
    public function boot(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->user = $this->userRepository->all(['*'], ['adminUser']);
    }
}
