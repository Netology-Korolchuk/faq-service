<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestion extends FormRequest
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
            'author_name' => 'required|max:255',
            'email' => 'required|email',
            'text' => 'required|min:10'
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
            'author_name.required' => 'Имя обязательно для заполнения',
            'author_name.max'  => 'Имя должно быть не более 255 символов',
            'email.required'  => 'Электронная почта обязательна для заполения',
            'email.email'  => 'Некорректный адрес почты',
            'text.required'  => 'Вы не задали вопрос',
            'text.min'  => 'Вопрос должен быть не менее 10 символов'
        ];
    }
}
