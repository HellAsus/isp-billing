<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LocationLocality extends Model
{
    public function type(): BelongsTo
    {
        return $this->BelongsTo('App\Models\LocationLocalityType', 'location_locality_type_id');
    }

    public function districts(): HasMany
    {
        return $this->hasMany('App\Models\LocationDistrict');
    }
}
