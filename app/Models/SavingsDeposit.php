<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingsDeposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_id',
        'customer_id',
        'customer_name',
        'tran_date',
        'amount',
        'status',
        'branch_id',
    ];
}
