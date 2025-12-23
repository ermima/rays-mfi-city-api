<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
   public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'population' => 'required|integer|min:0',
        ];
    }
}
