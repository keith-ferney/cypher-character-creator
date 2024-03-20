<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\PowerShift;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PowerShiftFactory extends Factory
{
    protected $model = PowerShift::class;

    public function definition(): array
    {
        return [
            'character_id' => Character::factory(),

            'value' => $this->faker->randomNumber(),
            'additional_text' => $this->faker->text(),
            'hearts_used' => $this->faker->randomNumber(),
        ];
    }
}
