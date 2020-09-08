<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LocationHouse extends Model
{
    public function type(): HasOne
    {
        return $this->HasOne('App\Models\LocationHouseType');
    }

    public function street(): HasOne
    {
        return $this->HasOne('App\Models\LocationStreet');
    }
}

