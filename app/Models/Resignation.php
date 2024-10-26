<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resignation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_of_resignation',
        'render_start',
        'render_end',
        'status'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id');
    }

    public function branch()
    {
        return $this->belongsTo(Probation::class, 'user_id');
    }
}
