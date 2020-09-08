<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LocationStreet extends Model
{
    public function district(): HasOne
    {
        return $this->HasOne('App\Models\LocationDistrict');
    }

    public function type(): HasOne
    {
        return $this->HasOne('App\Models\LocationStreetType');
    }

    public function houses(): HasMany
    {
        return $this->hasMany('App\Models\LocationHouse');
    }
}
