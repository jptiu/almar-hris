<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_id',//Lnkltranh_no
        'loan_day_no',//ltrand_dayno
        'loan_due_date',//ltrand_duedate
        'loan_due_amount',//ltrand_dueamt
        'loan_date_paid',//ltrand_datepaid
        'loan_amount_paid',//ltrand_amtpaid
        'loan_running_balance',//ltrand_runbal
        'user_id',//ltrand_clctor
        'loan_bank',//ltrand_bank
        'loan_check_no',//ltrand_chkno
        'loan_remarks',//ltrand_rem
        'loan_amount_tenderd',//ltrand_amttend
        'loan_amount_change',//ltrand_amtchange
        'loan_withdraw_from_bank',//ltrand_withdrawn_frombank
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
