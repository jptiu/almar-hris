<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'leave_type',
        'days_with_pay',
        'days_without_pay',
        'duration',
        'reason',
    ];

    // You can define relationships here
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

