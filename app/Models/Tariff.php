<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tariff extends Model
{
    use SoftDeletes;

    public function customers(): HasMany
    {
        return $this->hasMany('App\Models\Customer');
    }

    public function ipPool(): HasOne
    {
        return $this->hasOne('App\Models\IpPool');
    }

}
