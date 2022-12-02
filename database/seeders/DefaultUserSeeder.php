<?php

namespace Database\Seeders;

use App\Repository\Eloquent\User\UserRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    protected $userRepository;
    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => Hash::make('test1234'),
            'status' => 1,
            ],
        ];
        foreach ($user as $key => $item) {
            if (!$this->userRepository->existsByColumn(['name' => $item['name']])) {
                $this->userRepository->create($item);
            }
        }
    }
}
