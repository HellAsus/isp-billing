<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    
    public function tariff(): HasOne
    {
        return $this->hasOne('App\Models\Tariff');
    }

    public function statistics(): HasMany
    {
        return $this->hasMany('App\Models\CustomerStatistics');
    }

    public function shaper(): HasOne
    {
        return $this->hasOne('App\Models\Shaper');
    }

    public function phone(): HasMany
    {
        return $this->hasMany('App\Models\CustomerPhone');
    }

}
