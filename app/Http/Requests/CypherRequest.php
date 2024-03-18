<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CypherRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'description' => ['required'],
            'character_id' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
