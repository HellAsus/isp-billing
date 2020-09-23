<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PhoneOperatorCode extends Model
{
    public function country(): HasOne
    {
        return $this->HasOne('App\Models\PhoneCountryCode');
    }
}
