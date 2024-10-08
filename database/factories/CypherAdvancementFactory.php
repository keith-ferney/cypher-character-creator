<?php

namespace Database\Factories;

use App\Models\CypherAdvancement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CypherAdvancementFactory extends Factory
{
    protected $model = CypherAdvancement::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
