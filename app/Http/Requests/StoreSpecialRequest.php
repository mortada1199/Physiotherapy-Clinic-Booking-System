<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpecialRequest extends FormRequest
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
            'name' => 'required|max:255|unique:session_doctors,name',
            'price' => 'required|numeric',
            'numbersession' => 'required|integer',
        ];
    }

    /**
     * رسائل الأخطاء باللغة العربية
     */
    public function messages(): array
    {
        return [
            'name.required' => 'الرجاء إدخال اسم التخصص.',
            'name.max' => 'اسم التخصص يجب ألا يتجاوز 255 حرفاً.',
            'name.unique' => 'هذا التخصص مسجل مسبقاً.',

            'price.required' => 'الرجاء إدخال سعر الجلسة.',
            'price.numeric' => 'سعر الجلسة يجب أن يكون رقماً.',

            'numbersession.required' => 'الرجاء إدخال عدد الجلسات.',
            'numbersession.integer' => 'عدد الجلسات يجب أن يكون رقماً صحيحاً.',
        ];
    }
}
