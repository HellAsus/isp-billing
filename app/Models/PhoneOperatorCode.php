<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhoneOperatorCode extends Model
{
    public function country(): BelongsTo
    {
        return $this->BelongsTo('App\Models\PhoneCountryCode', 'phone_country_code_id');
    }
}
