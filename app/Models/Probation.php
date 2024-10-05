<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Probation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_of_probation',
        'quota',
        'branch',
        'type',
        'status'
    ];


    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id');
    }
}
