<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserUpdateRequest extends FormRequest
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
            'name'      => 'required',
            'email'     => 'required', 'string', 'email', 'max:255', 'unique:users', 'email,'. Auth::user()->id,
            'mobile'    => 'required', 'min:10', 'max:10', 'string',
            'category'  => 'required',
            'bio'       => 'nullable', 'max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Full name should not be blank'
        ];
    }
}
