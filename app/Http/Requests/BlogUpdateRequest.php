<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
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
            // 'category_id' => ['required'],

            'name' => ['required'],
            'slug' => ['required','alpha_dash','regex:/^[0-9a-z-]+$/'],

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'category_id' => 'catedory is Required',

            'name' => 'Name is Required',
            'slug.required' => 'Slug is Required',
            'slug.unique' => 'Slug must be Unique'
        ];
    }
}
