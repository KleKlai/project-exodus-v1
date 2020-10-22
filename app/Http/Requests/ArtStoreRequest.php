<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtStoreRequest extends FormRequest
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
            'title'         => ['required', 'string'],
            'subject'       => ['required', 'string'],
            'city'          => ['required', 'string'],
            'category'      => ['required', 'string'],
            'style'         => ['required', 'string'],
            'medium'        => ['required', 'string'],
            'material'      => ['required', 'string'],
            'size'          => ['nullable', 'string'],
            'height'        => ['required', 'integer', 'min:0'],
            'width'         => ['required', 'integer', 'min:0'],
            'depth'         => ['nullable', 'integer', 'min:0'],
            'price'         => ['required', 'integer', 'min:0'],
            'description'   => ['nullable', 'string'],
            'file'          => ['nullable', 'mimes:jpg,png,jpeg'],
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
