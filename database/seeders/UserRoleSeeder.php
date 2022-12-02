<?php

namespace Database\Seeders;

use App\Repository\Eloquent\User\UserRole\UserRoleRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    protected $userRoleRepository;
    /**
     * @param UserRoleRepository $userRoleRepository
     */
    public function __construct(UserRoleRepository $userRoleRepository)
    {
        $this->userRoleRepository = $userRoleRepository;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRoles = [
            [
                'name' => 'Super Admin',
                'slug' => 'super-admin',
                'description' => 'Have all permissions',
            ],
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'controlled by super admin',
            ],
        ];

        foreach ($userRoles as $key => $item) {
            if (!$this->userRoleRepository->existsByColumn(['slug' => $item['slug']])) {
                $this->userRoleRepository->create($item);
            }
        }
    }
}
