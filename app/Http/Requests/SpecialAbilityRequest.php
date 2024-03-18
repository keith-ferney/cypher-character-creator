<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialAbilityRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'character_id' => ['required', 'integer'],
            'description' => ['nullable'],
            'cypher_ability_id' => ['nullable', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
