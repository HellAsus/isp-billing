<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LocationLocality extends Model
{
    public function type(): HasOne
    {
        return $this->hasOne('App\Models\LocationLocalityType');
    }

    public function districts(): HasMany
    {
        return $this->hasMany('App\Models\LocationDistrict');
    }
}
