<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipientRequest extends FormRequest
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

            'fname' => 'required',
            'lname' => 'required',
            'birth_date' => 'required|date',
            'gender' => 'required',
            'contact' => 'required|numeric',
            'email' => 'required|email',
            'blood_type' => 'required',
            'required_units' => 'required|numeric',
            'address' => 'required',
            'hospital' => 'required',

        ];
    }
}
