<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    
    public function Street(): HasOne
    {
        return $this->hasOne('App\Models\Street', 'id', 'street_id');
    }

    public function Tariff(): HasOne
    {
        return $this->hasOne('App\Models\Tariff', 'id', 'tarif_id');
    }

    public function Statistics(): HasMany
    {
        return $this->hasMany('App\Models\Statistic', 'user_id', 'id');
    }
}
