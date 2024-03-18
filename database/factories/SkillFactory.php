<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SkillFactory extends Factory
{
    protected $model = Skill::class;

    public function definition(): array
    {
        return [
            'character_id' => Character::factory(),

            'name' => $this->faker->name(),
            'power_shift' => $this->faker->randomNumber(),
            'pool' => $this->faker->randomElement(['might','speed','intellect']),
            'type' => $this->faker->randomElement(['trained', 'specialized', 'inability']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
