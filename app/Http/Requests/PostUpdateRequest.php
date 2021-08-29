<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
            "title" => "bail|required",
            "text" => "bail|required",
            "image" => "bail|sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:1024",
            "category_id" => "bail|required|exists:categories,id",
        ];
    }
}
