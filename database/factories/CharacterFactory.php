<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\CypherDescriptor;
use App\Models\CypherFlavor;
use App\Models\CypherFocus;
use App\Models\CypherType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CharacterFactory extends Factory
{
    protected $model = Character::class;

    public function definition(): array
    {
        return [
            'cypher_descriptor_id' => CypherDescriptor::inRandomOrder()->first()->id,
            'cypher_type_id' => CypherType::inRandomOrder()->first()->id,
            'cypher_focus_id' => CypherFocus::inRandomOrder()->first()->id,
            'cypher_flavor_id' => CypherFlavor::inRandomOrder()->first()->id,

            'name' => $this->faker->name(),
            'background' => $this->faker->realText(300),
            'notes' => $this->faker->realText(300),
            'portrait' => $this->faker->realText(300),
            'tier' => $this->faker->randomNumber(),
            'effort' => $this->faker->randomNumber(),
            'experience' => $this->faker->randomNumber(),
            'might' => $this->faker->randomNumber(),
            'might_pool' => $this->faker->randomNumber(),
            'might_edge' => $this->faker->randomNumber(),
            'speed' => $this->faker->randomNumber(),
            'speed_pool' => $this->faker->randomNumber(),
            'speed_edge' => $this->faker->randomNumber(),
            'intellect' => $this->faker->randomNumber(),
            'intellect_pool' => $this->faker->randomNumber(),
            'intellect_edge' => $this->faker->randomNumber(),
            'recovery_modifier' => $this->faker->randomNumber(),
            'recovery_action_used' => $this->faker->boolean(),
            'recovery_10_mins_used' => $this->faker->boolean(),
            'recovery_1_hour_used' => $this->faker->boolean(),
            'recovery_10_hours_used' => $this->faker->boolean(),
            'impared' => $this->faker->boolean(),
            'debilitated' => $this->faker->boolean(),
            'dead' => $this->faker->boolean(),
            'armor' => $this->faker->randomNumber(),
            'money' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
