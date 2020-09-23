<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CustomerPhone extends Model
{
    public function country(): HasOne
    {
        return $this->hasOne('App\Models\PhoneCountryCode');
    }

    public function operator(): HasOne
    {
        return $this->hasOne('App\Models\PhoneOperatorCode');
    }
}
