<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'm_name',
        'l_name',
        'position_desired',
        'present_address',
        'provincial_address',
        'phone_number',
        'birth_date',
        'birth_place',
        'civil_status',
        'religion',
        'age',
        'height',
        'weight',
        'f_spouse',
        'm_spouse',
        'l_spouse',
        'child_1_name',
        'child_1_age',
        'child_2_name',
        'child_2_age',
        'child_3_name',
        'child_3_age',
        'm_maiden_f_name',
        'm_maiden_m_name',
        'm_maiden_l_name',
        'm_occupation',
        'm_phone',
        'father_f_name',
        'father_m_name',
        'father_l_name',
        'f_occupation',
        'f_phone',
        'emergency_name',
        'emergency_address',
        'emergency_phone',
        'relationship',
        'elementary',
        'secondary',
        'college',
        'course',
        'vocational',
        'n_company_1',
        'a_company_1',
        'p_company_1',
        'f_company_1',
        't_company_1',
        'cf_name_1',
        'cf_occ_1',
        'cf_add_1',
        'cf_phone_1',
        'sss',
        'pagibig',
        'philhealth',
        'tin',
        'file',
    ];

    public function branch()
    {
        return $this->belongsTo(Probation::class, 'user_id');
    }
}
