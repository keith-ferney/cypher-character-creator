<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'type' => ['required'],
            'pool' => ['required', 'string'],
            'power_shift' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
