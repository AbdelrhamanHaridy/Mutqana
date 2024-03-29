<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
        return [
            'name'     => 'required|string|min:3|max:199',
            'username' => 'required','string','min:3','max:199', Rule::unique('users')->ignore($this->id),
            'email'    => 'required','string','email','max:255',Rule::unique('users')->ignore($this->id),
            'phone'    => 'string','max:255',Rule::unique('users')->ignore($this->id),
            'location' => 'string|max:255',

        ];
    }
}
