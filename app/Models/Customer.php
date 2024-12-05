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
        'birth_date',
        'birth_place',
        'age',
        'gender',
        'citizenship',
        'facebook_name',
        'spouse_name',
        'occupation',
        'c_nameadd',
        'agency_name',
        'add_tel',
        'comp_name',
        'date_hired',
        'day_off',
        'monthly_salary',
        'salary_sched',
        'monthly_pension',
        'pension_sched',
        'pension_type',
        'fathers_name',
        'mothers_name',
        'branch',
        'card_no',
        'acc_no',
        'pin_no',
        'branch_id',
    ];

    public function loan()
    {
        return $this->hasOne(Loan::class, 'customer_id')->latestOfMany();
    }

    public function bry()
    {
        return $this->belongsTo(Barangay::class, 'barangay', 'id');
    }

    public function cty()
    {
        return $this->belongsTo(CityTown::class, 'city', 'id');
    }

    public function customerType()
    {
        return $this->belongsTo(CustomerType::class, 'type', 'code');
    }
}
