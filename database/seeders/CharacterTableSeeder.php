<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Character;
use App\Models\CypherAbility;
use App\Models\CypherType;
use App\Models\Skill;
use App\Models\SpecialAbility;
use App\Models\User;
use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $character = Character::factory()->create([
            'user_id' => User::first()->id,
        ]);

        Skill::factory()->count(5)->create([
            'character_id' => $character->id,
        ]);
    }
}
