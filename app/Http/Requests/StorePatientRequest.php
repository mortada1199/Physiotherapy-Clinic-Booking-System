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
            'sessionprice' => 'nullable|numeric',
            'referingdoctor_name' => 'max:255',
            'exectingdoctor_name' => 'max:255',
            'persent' => 'nullable|numeric',
            'name' => 'required|max:255',
            'date' => 'nullable|date',
            'numbersession' => 'nullable|integer',
            'address' => 'max:500',
            'phone' => 'max:20',
            'dignosis' => 'max:1000',
            'major' => 'max:255',
            'type' => 'required|max:50',
        ];
    }

    /**
     * رسائل الأخطاء باللغة العربية
     */
    public function messages(): array
    {
        return [
            'name.required' => 'الرجاء إدخال اسم المريض.',
            'name.max' => 'اسم المريض يجب ألا يتجاوز 255 حرفاً.',

            'session_name.max' => 'اسم الجلسة يجب ألا يتجاوز 255 حرفاً.',
            'sessionprice.numeric' => 'سعر الجلسة يجب أن يكون رقماً.',

            'referingdoctor_name.max' => 'اسم الطبيب المحول يجب ألا يتجاوز 255 حرفاً.',
            'exectingdoctor_name.max' => 'اسم الطبيب المنفذ يجب ألا يتجاوز 255 حرفاً.',

            'persent.numeric' => 'نسبة الطبيب يجب أن تكون رقماً.',

            'date.date' => 'الرجاء إدخال تاريخ صحيح.',
            'numbersession.integer' => 'عدد الجلسات يجب أن يكون رقماً صحيحاً.',

            'address.max' => 'العنوان يجب ألا يتجاوز 500 حرف.',
            'phone.max' => 'رقم الهاتف يجب ألا يتجاوز 20 رقماً.',

            'dignosis.max' => 'التشخيص يجب ألا يتجاوز 1000 حرف.',
            'major.max' => 'التخصص يجب ألا يتجاوز 255 حرفاً.',
        ];
    }
}
