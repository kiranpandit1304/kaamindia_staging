<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            return [
                'full_name' => 'nullable|max:50',
                'mobile_number' => 'required|digits:10', Rule::unique('users', 'mobile_number')->ignore($this->mobile_number),
            ];
        }

        return [
            'full_name' => 'required|max:50',
            'mobile_number' => 'required|digits:10|unique:users,mobile_number',
            'role' => 'required',
        ];
    }
}
