<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'company_name',
        'address',
        'tel_no',
    ];
}
