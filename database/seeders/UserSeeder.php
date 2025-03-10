<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
            'role_id' => 1,
            'name' => 'Manager',
            'email' => 'arabjon@gmail.com',
            'password' => Hash::make('secret'),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Client',
            'email' => 'arabjon@1gmail.com',
            'password' => Hash::make('secret'),
        ]);
        
        User::create([
            'role_id' => 2,
            'name' => 'Client',
            'email' => Str::random(8) . '@gmail.com',
            'password' => Hash::make('test'),
        ]);
    }
}
