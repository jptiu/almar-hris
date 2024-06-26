<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class ExpensesUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('loan_access');;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'exp_ref_no' => 'string',
            'acc_no' => 'string',
            'acc_class' => 'string',
            'acc_type' => 'string',
            'acc_title' => 'string',
            'justification' => 'string',
            'or_no' => 'string',
            'amount' => 'string',
            'exp_date' => 'string',
        ];
    }
}
