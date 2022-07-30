<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountHead extends Model
{
    use HasFactory;

    protected $appends = [
         'total_amount',
     ];

    public function getTotalAmountAttribute()
    {
        $debit =  $this->hasMany('App\Models\Transaction','account_head_id')->sum('debit');
        $credit = $this->hasMany('App\Models\Transaction','account_head_id')->sum('credit');

        $total = $debit - $credit;
        return $total;
    }

    public function mainLevel()
    {
        return $this->belongsTo('App\Models\MainLevel','main_level_id');
    }

    public function subLevel()
    {
        return $this->belongsTo('App\Models\SubLevel','sub_level_id');
    }

    public function childLevel()
    {
        return $this->belongsTo('App\Models\ChildLevel','child_level_id');
    }
}
