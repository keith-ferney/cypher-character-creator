<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PowerShiftRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'value' => ['nullable', 'integer'],
            'additional_text' => ['nullable'],
            'hearts_used' => ['nullable', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
