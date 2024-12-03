<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingsWithdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'customer_name',
        'tran_id',
        'tran_date',
        'amount',
        'status',
    ];
}
