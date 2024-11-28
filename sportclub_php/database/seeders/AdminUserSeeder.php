<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // Import the Seeder class
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Thuzar Myo',
            'email' => 'thuzarmyo12@example.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
    }
}

