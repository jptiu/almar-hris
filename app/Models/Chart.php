<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;

    protected $fillable = [
        'acc_no',
        'acc_class',
        'acc_type',
        'acc_title',
        'acc_description',
        'branch_id',
    ];
}
