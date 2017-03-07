<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAdmin extends FormRequest
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
            'login' => 'required|unique:admins|max:25',
            'surname' => 'required|max:25',
            'name' => 'required|max:25',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
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
            'login.unique' => 'Такой логин уже существует',
            'login.required' => 'Поле логин обязательно для заполнения',
            'login.max'  => 'Логин должен быть не более 25 символов',
            'surname.required'  => 'Фамилия обязательна для заполения',
            'surname.max'  => 'Фамилия должна быть не более 25 символов',
            'name.required'  => 'Имя обязательно для заполнения',
            'name.max'  => 'Имя должно быть не более 25 символов',
            'password.confirmed' => 'Пароли не совпадают',
            'password.required' => 'Пароль обязателен для заполнения',
            'password.min' => 'Пароль должен содержать минимум 6 символов',
            'password_confirmation.required' => 'Подтверждение обязательно для заполнения'
        ];
    }
}
