<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'first_name',
        'middle_name',
        'last_name',
        'house',
        'street',
        'barangay',
        'city',
        'job_position',
        'salary_sched',
        'tel_number',
        'cell_number',
        'civil_status',
        'status',
        'branch_id',
    ];

    public function loan()
    {
        return $this->hasMany(Loan::class, 'id', 'customer_id');
    }
}
