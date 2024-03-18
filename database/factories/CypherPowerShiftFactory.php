<?php

namespace Database\Factories;

use App\Models\CypherPowerShift;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CypherPowerShiftFactory extends Factory
{
    protected $model = CypherPowerShift::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'value' => $this->faker->word(),
            'is_per_round' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
