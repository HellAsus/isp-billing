<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LocationDistrict extends Model
{
    public function streets(): HasMany
    {
        return $this->hasMany('App\Models\LocationStreet');
    }

    public function locality(): BelongsTo
    {
        return $this->belongsTo('App\Models\LocationLocality', 'location_locality_id');
    }
}
