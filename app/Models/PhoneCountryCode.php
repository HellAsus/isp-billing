<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PhoneCountryCode extends Model
{
    public function operators(): HasMany
    {
        return $this->HasMany('App\Models\PhoneOperatorCode');
    }
}
