<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Admin User',  'email' => 'admin@example.com',  'role' => 'admin'],
            ['name' => 'Staff User',  'email' => 'staff@example.com',  'role' => 'staff'],
            ['name' => 'Viewer User', 'email' => 'viewer@example.com', 'role' => 'viewer'],
        ];

        foreach ($users as $data) {
            User::updateOrCreate(
                ['email' => $data['email']],
                $data + [
                    'password' => Hash::make('password'),
                    'email_verified_at' => now(),
                ]
            );
        }
    }
}
