<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildLevel extends Model
{
    use HasFactory;

    protected $appends = [
        'all_total_amount',
    ];


    public function SubLevel()
    {
        return $this->belongsTo('App\Models\SubLevel','sub_level_id');
    }

    public  function accountHead()
    {
        return $this->hasMany('App\Models\AccountHead', 'child_level_id');
    }

    public  function accountHeadCal()
    {
        return $this->hasMany('App\Models\AccountHead', 'child_level_id');
    }

   public function getAllTotalAmountAttribute()
   {
     return $this->accountHeadCal()->get()->sum('total_amount');
   }

}
