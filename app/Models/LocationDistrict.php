<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LocationDistrict extends Model
{
    public function streets(): HasMany
    {
        return $this->hasMany('App\Models\LocationStreet');
    }
}
