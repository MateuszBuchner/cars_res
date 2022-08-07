<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddCarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'body_type' => 'required',
            'make' => 'required',
            'model' => 'required',
            'first_registration' => 'required',
            'mileage' => 'required',
            'price' => 'required',
            'description' => 'required',
            'mainimage'=>'required','image',
        ];
    }
}
