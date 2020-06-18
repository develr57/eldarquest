<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'name'      => 'required|max:100',
            'email'     => 'required|email|max:80',
            'phone'     => 'required|max:20',
            'comment'   => 'required|max:1200',
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'Это поле не должно быть пустым!',
            'email'     => 'Это поле не соответствует формату эл.почты!',
            'max'       => 'Не более :max символов для этого поля!'
        ];
    }
}
