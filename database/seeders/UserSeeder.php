<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'maulana',
            'username' => 'maulana',
            'email' => 'zqJt7@example.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'zidan',
            'username' => 'zidan',
            'email' => 'zqJt7@zidan.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make('password'),
            'role' =>  "admin",
            'remember_token' => Str::random(10),
        ]);
    }
}
