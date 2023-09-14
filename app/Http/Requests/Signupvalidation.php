<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Signupvalidation extends FormRequest
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
    public function rules(): array
{
    return [
        'useremail' => 'required|email|unique:users',
        'username' => 'required|regex:/^[a-zA-Z]+$/u',
        'password' => 'required|min:6',
        'firstname' => 'required|alpha',
        'lastname' => 'required|alpha',
        'gender' => 'required',
        'city' => 'required|alpha',
        'state' => 'required|alpha',
        'zipcode' => 'required|numeric'
    ];
}

public function messages(): array
{
    return [
        'useremail.required' => 'Please enter an email.',
        'useremail.unique:user'=>'Thia email is already avaliable',
        'username.required'=>'please enter your user name',
        'password.required'=>'you have to enter your password',
        'firstname.required'=>'please enter the first name ',
        'lastname.required'=>'please enter the last name ',
        'gender.required'=>'please select the grnder',
        'city.required'=>'please enter the city name',
        'zipcode.required'=>'please eneter the zip code'
    ];
}
}