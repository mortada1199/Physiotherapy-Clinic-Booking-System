<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
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
            'name' => 'required',
            'experience' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:doctors',
           // 'persent' => 'required',
            'email' => 'required|email|unique:doctors',
        ];
    }

    /**
     * رسائل الأخطاء باللغة العربية
     */
    public function messages(): array
    {
        return [
            'name.required' => 'الرجاء إدخال اسم الطبيب.',
            'experience.required' => 'الرجاء إدخال سنوات الخبرة.',
            'address.required' => 'الرجاء إدخال عنوان الطبيب.',
            'phone.required' => 'الرجاء إدخال رقم الهاتف.',
            'phone.unique' => 'رقم الهاتف مسجل مسبقاً.',
            'persent.required' => 'الرجاء إدخال نسبة الطبيب.',
            'email.required' => 'الرجاء إدخال البريد الإلكتروني.',
            'email.email' => 'الرجاء إدخال بريد إلكتروني صحيح.',
            'email.unique' => 'البريد الإلكتروني مسجل مسبقاً.',
        ];
    }
}
