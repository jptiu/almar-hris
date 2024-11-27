<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'position',
        'current_rate',
        'date_of_payroll',
        'start_date',
        'end_date',
        'days_of_work',
        'total_salary'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id');
    }

}
