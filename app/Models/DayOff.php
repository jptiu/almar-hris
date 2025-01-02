<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayOff extends Model
{
    use HasFactory;

    protected $fillable = ['schedule_id', 'day_of_week'];

    public function Schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }

}
