<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateKangarooRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:190',
                Rule::unique('kangaroos')->ignore($this->kangaroo->id)
            ],
            'nickname' => 'nullable|string|max:190',
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'gender' => 'required|numeric',
            'color' => 'nullable|string',
            'friendliness' => 'nullable|numeric',
            'birthday' => 'required|date|date_format:Y-m-d|before:today',
        ];
    }
}
