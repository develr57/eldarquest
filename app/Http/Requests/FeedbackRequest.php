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
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'     => 'required',
            'comment'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'Это поле не должно быть пустым!',
            'email'     => 'Это поле не соответствует формату эл.почты!',
        ];
    }
}
