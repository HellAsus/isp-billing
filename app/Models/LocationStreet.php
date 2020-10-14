<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LocationStreet extends Model
{
    public function district(): BelongsTo
    {
        return $this->BelongsTo('App\Models\LocationDistrict', 'location_district_id');
    }

    public function type(): BelongsTo
    {
        return $this->BelongsTo('App\Models\LocationStreetType', 'location_street_type_id');
    }

    public function houses(): HasMany
    {
        return $this->hasMany('App\Models\LocationHouse');
    }
}
