<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        Role::insert([
            [
                'name' => 'admin',
                'description' => 'Administrator',
            ],
            [
                'name' => 'user',
                'description' => 'User',
            ],
            [
                'name' => 'guest',
                'description' => 'Guest',
            ]
        ]);

        $user = User::find('email', 'admin@example.com');
        $role = Role::where('name', 'admin')->first();

        UserRole::create([
            'user_id' => $user->id,
            'role_id' => $role->id,
        ]);
    }
}
