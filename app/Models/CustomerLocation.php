<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CustomerLocation extends Model
{
    public function customer(): HasOne
    {
        return $this->hasOne('App\Models\Customer');
    }

    public function house(): BelongsTo
    {
        return $this->belongsTo('App\Models\LocationHouse', 'location_house_id');
    }
}
