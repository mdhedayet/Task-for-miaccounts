<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainLevel extends Model
{
    use HasFactory;

    protected $appends = [
        'all_total_amount',
    ];

    public  function subLevel()
    {
        return $this->hasMany('App\Models\SubLevel', 'main_level_id');
    }
    public  function accountHead()
    {
        return $this->hasMany('App\Models\AccountHead', 'main_level_id')->where(function($query) {
            $query->where('sub_level_id','=',null)->where('child_level_id','=',null);

            });


    }

    public  function accountHeadCal()
    {
            return $this->hasMany('App\Models\AccountHead', 'main_level_id');

    }

    public function getAllTotalAmountAttribute()
    {
        return $this->accountHeadCal()->get()->sum('total_amount');
    }

    public function supportF(){

    }
}
