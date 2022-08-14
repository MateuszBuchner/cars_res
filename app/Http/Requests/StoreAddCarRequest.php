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
            'first_registration' => 'required|numeric',
            'mileage' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required|max:1500',
            'mainimage'=>'required','image',
            'fuel'=>'required',
            'state_of_wear'=>'required',
            'transmission'=>'required',
        ];
    }
}
