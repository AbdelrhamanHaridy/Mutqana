<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'      => 'required|min:3|max:199|string',
            'mail'      => 'required|min:11|max:199|email:rfc,dns',
            'phone'     => 'required|numeric|digits_between:11,15',
            'subject'   => 'required|min:3|max:255|string',
            'message'   => 'required|min:3|max:700|string',
        ];
    }
}
