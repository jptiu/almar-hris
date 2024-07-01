<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
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
        'name_of_spouse',
        'number_of_children',
        'mothers_maiden_name',
        'm_occupation',
        'fathers_maiden_name',
        'f_occupation',
        'person_emergency',
        'relationship',
        'elementary',
        'secondary',
        'college',
        'course',
        'vocational',
        'employment_history',
        'character_reference',
        'sss',
        'pagibig',
        'philhealth',
        'tin',
        'file',
    ];
}
