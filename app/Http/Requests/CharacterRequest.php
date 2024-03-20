<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'background' => ['nullable'],
            'notes' => ['nullable'],
            'portrait' => ['nullable'],
            'cypher_descriptor_id' => ['nullable', 'integer'],
            'cypher_type_id' => ['nullable', 'integer'],
            'cypher_focus_id' => ['nullable', 'integer'],
            'cypher_flavor_id' => ['nullable', 'integer'],
            'tier' => ['nullable', 'integer'],
            'effort' => ['nullable', 'integer'],
            'experience' => ['nullable', 'integer'],
            'might' => ['nullable', 'integer'],
            'might_pool' => ['nullable', 'integer'],
            'might_edge' => ['nullable', 'integer'],
            'speed' => ['nullable', 'integer'],
            'speed_pool' => ['nullable', 'integer'],
            'speed_edge' => ['nullable', 'integer'],
            'intellect' => ['nullable', 'integer'],
            'intellect_pool' => ['nullable', 'integer'],
            'intellect_edge' => ['nullable', 'integer'],
            'recovery_modifier' => ['nullable', 'integer'],
            'recovery_action_used' => ['boolean'],
            'recovery_10_mins_used' => ['boolean'],
            'recovery_1_hour_used' => ['boolean'],
            'recovery_10_hours_used' => ['boolean'],
            'impared' => ['boolean'],
            'debilitated' => ['boolean'],
            'dead' => ['boolean'],
            'armor' => ['required', 'integer'],
            'money' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
