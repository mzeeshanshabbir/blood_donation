<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
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

            'donor_id' => 'required' ,
            'donation_date' => 'required|date',
            'blood_type_id' => 'required',
            'quantity_in_ml' => 'required|numeric',
            'status' => 'required',

        ];
    }
}
