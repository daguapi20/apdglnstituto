<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $rules =[
            'cardn' => [
                'required', 'digits:10',
                Rule::unique('users')->ignore($this->route('user')->id)],
            'name' => ['required', 'regex:/^[\pL\s\-]+$/u',  'string', 'max:255'],
            'lastname' => ['required', 'regex:/^[\pL\s\-]+$/u',  'string', 'max:255'],
            'email'=> [
                'required',
                Rule::unique('users')->ignore( $this->route('user')->id )
            ],//ignora el email del usuario que estamos editando
        ];
        if($this->get('avatar'))
        {
            $rules=array_merge($rules, ['avatar'=> 'mimes:jpg,jpeg,png']);
        }

        if($this->filled('password'))
        {
            $rules['password'] = ['confirmed', 'min:8'];
        }

        return $rules;
    }
    
}
