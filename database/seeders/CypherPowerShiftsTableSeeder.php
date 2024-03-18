<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CypherAbility;
use App\Models\CypherPowerShift;
use Illuminate\Database\Seeder;

class CypherPowerShiftsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $powerShifts = [
            [
                'name' => 'Accuracy',
                'description' => 'All attack rolls',
            ],
            [
                'name' => 'Dexterity',
                'description' => 'Movement, acrobatics, initiative, and Speed defense',
            ],
            [
                'name' => 'Flight',
                'description' => '',
                'allows_additional_text' => true,
                'is_per_round' => true,
            ],
            [
                'name' => 'Healing',
                'description' => 'One extra recovery roll per shift (each one action, all coming before other normal recovery rolls)',
                'has_healing_checkboxes' => true,
            ],
            [
                'name' => 'Increased Range',
                'description' => '',
                'allows_additional_text' => true,
            ],
            [
                'name' => 'Intelligence',
                'description' => 'Intellect defense rolls and all knowledge, science, and crafting tasks',
            ],
            [
                'name' => 'Power',
                'description' => 'Use of a specific power, including damage (3 additional points per shift) but not attack rolls',
                'allows_additional_text' => true,
            ],
            [
                'name' => 'Prodigy',
                'description' => '',
            ],
            [
                'name' => 'Resilience',
                'description' => 'Might defense rolls and Armor (+1 per shift)',
            ],
            [
                'name' => 'Sevant',
                'description' => '',
                'allows_additional_text' => true,
            ],
            [
                'name' => 'Single Attack',
                'description' => 'Attack rolls and damage (3 additional points per shift)',
                'allows_additional_text' => true,
            ],
            [
                'name' => 'Strength',
                'description' => 'All tasks involving strength, including jumping and dealing damage in melee or thrown attacks (3 additional points of damage per shift) but not attack rolls',
            ],
        ];

        foreach ($powerShifts as $powerShift) {
            CypherPowerShift::create($powerShift);
        }

    }
}
