<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLedgerDaily extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'customer_id',
        'name',
        'transaction_no',
        'date_loan',
        'principal_amount',
        'status',
    ];
}
