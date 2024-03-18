<?php

namespace Database\Factories;

use App\Models\Attack;
use App\Models\Character;
use App\Models\CypherAdvancement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AttackFactory extends Factory
{
    protected $model = Attack::class;

    public function definition(): array
    {
        return [
            'character_id' => Character::factory(),

            'name' => $this->faker->name(),
            'mod' => $this->faker->randomNumber(),
            'damage' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
