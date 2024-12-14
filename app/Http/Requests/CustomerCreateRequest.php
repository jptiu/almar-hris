<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class CustomerCreateRequest extends FormRequest
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
            // 'id' => 'string',
            'type' => 'string',
            'first_name' => 'string',
            'middle_name' => 'string',
            'last_name' => 'string',
            'house' => 'string',
            'street' => 'string',
            'barangay' => 'string',
            'city' => 'string',
            'job_position' => 'string',
            'salary_sched' => 'string',
            'tel_number' => 'string',
            'cell_number' => 'string',
            'civil_status' => 'string',
            'status' => 'string',
            'birth_date' => 'string',
            'birth_place' => 'string',
            'age' => 'string',
            'gender' => 'string',
            'citizenship' => 'string',
            'facebook_name' => 'string',
            'spouse_name' => 'string',
            'spouse_number' => 'string',
            'spouse_age' => 'string',
            'spouse_bdate' => 'string',
            'spouse_fb' => 'string',
            'occupation' => 'string',
            'c_nameadd' => 'string',
            'agency_name' => 'string',
            'add_tel' => 'string',
            'add_telc' => 'string',
            'comp_name' => 'string',
            'date_hired' => 'string',
            'day_off' => 'string',
            'monthly_salary' => 'string',
            'salary_sched' => 'string',
            'monthly_pension' => 'string',
            'pension_sched' => 'string',
            'pension_type' => 'string',
            'fathers_name' => 'string',
            'fathers_num' => 'string',
            'mothers_name' => 'string',
            'mothers_num' => 'string',
            'branch' => 'string',
            'card_no' => 'string',
            'acc_no' => 'string',
            'pin_no' => 'string',
        ];
    }
}
