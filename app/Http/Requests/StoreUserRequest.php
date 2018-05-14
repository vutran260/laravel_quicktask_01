<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|max:20',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => trans('user.validate.required'),
            'name.max' => trans('user.validate.max'),
            'email.required' => trans('user.validate.required'),
            'email.email' => trans('user.validate.email'),
            'email.max' => trans('user.validate.maxl'),
            'email.unique' => trans('user.validate.unique'),
            'password.required' => trans('user.validate.required'),
            'password.min' => trans('user.validate.min.string'),
            'password.confirmed' => trans('user.validate.confirmed'),
        ];
    }
}
