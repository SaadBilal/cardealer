<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CarRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'make' => 'required|max:15',
            'model' => 'required|max:15',
            'year' => 'required|digits:4',
            'description' => 'required|max:255',
            'mpg' => 'required|digits_between:2,3',
            'hp' => 'required|digits_between:2,4',
            'msrp' => 'required|digits_between:4,6',
            'offer' => 'required|max:255',
        ];
    }
}
