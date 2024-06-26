<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'exp_ref_no',
        'acc_no',
        'acc_class',
        'acc_type',
        'acc_title',
        'justification',
        'or_no',
        'amount',
        'exp_date',
    ];
}
