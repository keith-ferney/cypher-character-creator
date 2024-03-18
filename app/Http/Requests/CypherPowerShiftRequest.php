<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CypherPowerShiftRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'value' => ['required'],
            'is_per_round' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
