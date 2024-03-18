<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Character;
use App\Models\CypherAbility;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::create([
            'name' => 'John Doe',
            'email' => 'example@example.com',
            'password' => Hash::make('icR%l6q89^SWocae462W'),
        ]);
    }
}
