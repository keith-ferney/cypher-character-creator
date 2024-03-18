<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CypherAbility;
use App\Models\CypherAdvancement;
use Illuminate\Database\Seeder;

class CypherAdvancementsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $advancements = [
            ['name' => 'INCREASE CAPABILITIES', 'description' => '+4 points into stat Pools'],
            ['name' => 'MOVE TOWARD PERFECTION', 'description' => '+1 to the Edge of your choice'],
            ['name' => 'EXTRA EFFORT', 'description' => '+1 into Effort'],
            ['name' => 'SKILL TRAINING', 'description' => 'rain in a skill or specialize in a trained skill'],
        ];

        foreach ($advancements as $advancement) {
            CypherAdvancement::create($advancement);
        }

    }
}
