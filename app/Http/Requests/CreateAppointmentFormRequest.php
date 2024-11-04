<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateAppointmentFormRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'animal_name' => 'required',
            'animal_type_id' => 'required',
            'animal_age' => 'required',
            'symptoms' => 'required',
            'appointment_date' => 'required',
            'appointment_period' => 'required',
        ];
    }
}