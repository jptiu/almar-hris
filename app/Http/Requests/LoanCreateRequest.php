<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class LoanCreateRequest extends FormRequest
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
            'loan_type' => 'string',
            'transaction_type' => 'string',
            'trans_no' => 'string',
            'date_of_loan' => 'string',
            'customer_id' => 'string',
            'customer_type' => 'string',
            'status' => 'string',
            'principal_amount' => 'string',
            'days_to_pay' => 'string',
            'months_to_pay' => 'string',
            'interest' => 'string',
            'interest_amount' => 'string',
            'svc_charge' => 'string',
            'actual_record' => 'string',
            'payable_amount' => 'string',
        ];
    }
}
