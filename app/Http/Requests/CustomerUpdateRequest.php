<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class CustomerUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('loan_access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'string',
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
            'status' => 'string',
        ];
    }
}
