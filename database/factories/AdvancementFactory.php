<?php

namespace Database\Factories;

use App\Models\Advancement;
use App\Models\Character;
use App\Models\CypherAdvancement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AdvancementFactory extends Factory
{
    protected $model = Advancement::class;

    public function definition(): array
    {
        return [
            'cypher_advancement_id' => CypherAdvancement::factory(),
            'character_id' => Character::factory(),

            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
