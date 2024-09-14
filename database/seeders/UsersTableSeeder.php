<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin 1',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
            ]
        ];

        User::insert($user);
    }
}
