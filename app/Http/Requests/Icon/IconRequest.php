<?php

namespace App\Http\Requests\Icon;

use Illuminate\Foundation\Http\FormRequest;

class IconRequest extends FormRequest
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
            'title'     => 'required|min:3|string',
            'text'      => 'required|min:3|string',
            'user_id'   => 'required',
            'status'    => 'required|in:0,1|numeric',
        ];
    }
}
