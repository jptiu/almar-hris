<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class EmployeeCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('hr_access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'f_name' => 'string',
            'm_name' => 'string',
            'l_name' => 'string',
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
            'f_spouse'=> 'string',
            'm_spouse'=> 'string',
            'l_spouse'=> 'string',
            'child_1_name'=> 'string',
            'child_1_age'=> 'string',
            'child_2_name'=> 'string',
            'child_2_age'=> 'string',
            'child_3_name'=> 'string',
            'child_3_age'=> 'string',
            'm_maiden_f_name'=> 'string',
            'm_maiden_m_name'=> 'string',
            'm_maiden_l_name'=> 'string',
            'm_occupation'=> 'string',
            'm_phone'=> 'string',
            'father_f_name'=> 'string',
            'father_m_name'=> 'string',
            'father_l_name'=> 'string',
            'f_occupation'=> 'string',
            'f_phone'=> 'string',
            'emergency_name'=> 'string',
            'emergency_address'=> 'string',
            'emergency_phone'=> 'string',
            'relationship'=> 'string',
            'elementary'=> 'string',
            'secondary'=> 'string',
            'college'=> 'string',
            'course'=> 'string',
            'vocational'=> 'string',
            'n_company_1'=> 'string',
            'a_company_1'=> 'string',
            'p_company_1'=> 'string',
            'f_company_1'=> 'string',
            't_company_1'=> 'string',
            'cf_name_1'=> 'string',
            'cf_occ_1'=> 'string',
            'cf_add_1'=> 'string',
            'cf_phone_1'=> 'string',
            'sss'=> 'string',
            'pagibig'=> 'string',
            'philhealth'=> 'string',
            'tin'=> 'string',
            'file'=> 'string',
        ];
    }
}
