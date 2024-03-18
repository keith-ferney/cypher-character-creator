<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\CypherAbility;
use App\Models\SpecialAbility;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SpecialAbilityFactory extends Factory
{
    protected $model = SpecialAbility::class;

    public function definition(): array
    {
        return [
            'character_id' => Character::factory(),
            'cypher_ability_id' => CypherAbility::factory(),

            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
