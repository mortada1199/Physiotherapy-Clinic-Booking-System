<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'session_name' => 'max:255',
            'sessionprice' => '',
            'referingdoctor_name' => 'max:255',
            'exectingdoctor_name' => 'max:255',
            'persent' => '',
            'name' => 'max:255',
            'date' => '',
            'numbersession' => '',
            'address' => 'max:500',
            'phone' => 'max:20',
            'dignosis' => 'max:1000',
            'major' => 'max:255',


        ];
    }
}
