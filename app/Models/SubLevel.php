<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubLevel extends Model
{
    use HasFactory;

    protected $appends = [
        'all_total_amount',
    ];

    public function MainLevel()
    {
        return $this->belongsTo('App\Models\MainLevel','main_level_id');
    }

    public  function childLevel()
    {
        return $this->hasMany('App\Models\ChildLevel', 'sub_level_id');

    }
    public  function accountHead()
    {
        return $this->hasMany('App\Models\AccountHead', 'sub_level_id')->where(function($query) {
            $query->where('child_level_id','=',null);
        });

    }

    public  function accountHeadCal()
    {
        return $this->hasMany('App\Models\AccountHead', 'sub_level_id');
    }

   public function getAllTotalAmountAttribute()
   {
     return $this->accountHeadCal()->get()->sum('total_amount');
   }
}
