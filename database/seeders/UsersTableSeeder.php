<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'phone' => '1234567890',
                'address' => '123 Admin St',
                'usertype' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'current_team_id' => null,
                'profile_photo_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'phone' => '0987654321',
                'address' => '456 User St',
                'usertype' => 'user',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'current_team_id' => null,
                'profile_photo_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '1112223333',
                'address' => '789 Main St',
                'usertype' => 'user',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'current_team_id' => null,
                'profile_photo_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '4445556666',
                'address' => '1010 Maple Ave',
                'usertype' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('securepass'),
                'current_team_id' => null,
                'profile_photo_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Johnson',
                'email' => 'emily.johnson@example.com',
                'phone' => '7778889999',
                'address' => '2020 Pine St',
                'usertype' => 'user',
                'email_verified_at' => now(),
                'password' => Hash::make('mypassword'),
                'current_team_id' => null,
                'profile_photo_path' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
