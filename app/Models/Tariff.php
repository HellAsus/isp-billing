<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tariff extends Model
{
    use SoftDeletes;

    public function customers(): HasMany
    {
        return $this->hasMany('App\Model\Customers');
    }

    public function ipPool(): HasOne
    {
        return $this->hasOne('App\Model\IpPool');
    }

}
