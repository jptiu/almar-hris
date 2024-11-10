<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_type',
        'transaction_type',
        'trans_no',
        'date_of_loan',
        'customer_id',
        'customer_type',
        'status',
        'principal_amount',
        'days_to_pay',
        'months_to_pay',
        'interest',
        'interest_amount',
        'svc_charge',
        'actual_record',
        'payable_amount',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
