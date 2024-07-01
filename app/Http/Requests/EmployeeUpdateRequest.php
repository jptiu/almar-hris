<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class EmployeeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('hr_access');;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'string',
            'position_desired'=> 'string',
            'present_address'=> 'string',
            'provincial_address'=> 'string',
            'phone_number'=> 'string',
            'birth_date'=> 'string',
            'birth_place'=> 'string',
            'civil_status'=> 'string',
            'religion'=> 'string',
            'age'=> 'string',
            'height'=> 'string',
            'weight'=> 'string',
            'name_of_spouse'=> 'string',
            'number_of_children'=> 'string',
            'mothers_maiden_name'=> 'string',
            'm_occupation'=> 'string',
            'fathers_maiden_name'=> 'string',
            'f_occupation'=> 'string',
            'person_emergency'=> 'string',
            'relationship'=> 'string',
            'elementary'=> 'string',
            'secondary'=> 'string',
            'college'=> 'string',
            'course'=> 'string',
            'vocational'=> 'string',
            'employment_history'=> 'string',
            'character_reference'=> 'string',
            'sss'=> 'string',
            'pagibig'=> 'string',
            'philhealth'=> 'string',
            'tin'=> 'string',
            'file'=> 'string',
        ];
    }
}
