<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryUpdateRequest extends FormRequest
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
            // 'parent_id' => ['required'],
            'name' => ['required'],
            'slug' => ['required','alpha_dash','regex:/^[0-9a-z-]+$/','unique:blog_categories,id',Rule::unique('blogs')->ignore($this->blog)],
            // 'description' => ['required'],
            // 'meta_title' => ['required'],
            // 'meta_description' => ['required'],
            // 'meta_keywords' => ['required'],
            // 'status' => ['required'],
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

            // 'parent_id.required' => 'parent id is Required',
            'name.required' => 'Name is Required',
            'slug.required' => 'Slug is Required',
            'slug.unique' => 'Enter Unique Slug ',
            'slug.alpha_dash' => 'Please Write Underscore and Dashes',
            'slug.regex' => 'Please Enter LowerCase and Number',

            // 'description.required' => 'Description is Required',

            // 'meta_title.required' => 'metatitle is Required',

            // 'meta_description.required' => 'meta Description is Required',

            // 'meta_keywords.required' => 'meta keyword is Required',

            // 'status.required' => 'metakeyword is Required',
        ];
    }
}
