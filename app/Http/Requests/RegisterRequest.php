<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "username" => "bail|required|string" ,
            "email" => "bail|required|email|unique:users" ,
            "password" => "bail|required" ,//password
            "confirm_password" => "bail|required"//+confirmed
        ];
    }

    public function messages()
    {
        return [
//            "username.required" => "Obavezno polje" ,
//            "email.required" => "Obavezno polje" ,
//            "password.required" => "Obavezno polje" ,
//            "confirm_password.required" => "Obavezno polje" ,
            //OVO RESII -- neeee moraaas genericke su i na egnelsom
        ];
    }
}
