<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'status',
        'trans_no',
        'date',
        'branch_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
}
