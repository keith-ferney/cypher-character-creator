<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CypherAdvancementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'description' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
