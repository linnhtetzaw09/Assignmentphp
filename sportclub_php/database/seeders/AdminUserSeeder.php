<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'lynnhtetzaw.1137@gmail.com'],
            [
                'name' => 'Lin Htet Zaw',
                'is_admin' => true,
            ]
        );

        $this->command->info('Admin user with this email created or updated.');
    }
}



