<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LocationHouse extends Model
{
    public function type(): BelongsTo
    {
        return $this->BelongsTo('App\Models\LocationHouseType' , 'location_house_type_id');
    }

    public function street(): BelongsTo
    {
        return $this->BelongsTo('App\Models\LocationStreet', 'location_street_id');
    }
}

