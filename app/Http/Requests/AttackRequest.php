<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttackRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'mod' => ['required', 'integer'],
            'damage' => ['required', 'integer'],
            'character_id' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
