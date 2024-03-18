<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UsersTableSeeder::class);
        $this->call(CypherAbilitiesTableSeeder::class);
        $this->call(CypherAdvancementsTableSeeder::class);
        $this->call(CypherDescriptorsTableSeeder::class);
        $this->call(CypherFlavorsTableSeeder::class);
        $this->call(CypherFociTableSeeder::class);
        $this->call(CypherPowerShiftsTableSeeder::class);
        $this->call(CypherTypesTableSeeder::class);
        $this->call(CharacterTableSeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
