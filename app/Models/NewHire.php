<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewHire extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_hired',
        'status',
        'position'
    ];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id', 'user_id');
    }

    public function probation()
    {
        return $this->belongsTo(Probation::class, 'user_id', 'user_id');
    }
}
