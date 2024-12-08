<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashBill extends Model
{
    use HasFactory;

    protected $fillable = [
        'breakdown_id',
        'denomination',
        'type',
        'qty',
        'amount',
        'branch_id',
    ];

    public function breakdown()
    {
        return $this->belongsTo(Breakdown::class, 'breakdown_id');
    }
}
