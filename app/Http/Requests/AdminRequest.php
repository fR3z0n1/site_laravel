<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'img_new' => 'mimes:jpeg,jpg',
            'title_new' => 'required',
            'preview_new' => 'required',
            'text_new' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'mimes' => 'Загружаемый файл не соответсвует формату jpeg, jpg',
            'title_new.required' => 'Вы не ввели заголовок новости',
            'preview_new.required' => 'Вы не ввели описание новости',
            'text_new.required' => 'Вы не ввели текст новости',
        ];
    }
}
