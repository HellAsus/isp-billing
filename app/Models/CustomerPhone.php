<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerPhone extends Model
{
    public function operator(): BelongsTo
    {
        return $this->BelongsTo('App\Models\PhoneOperatorCode', 'phone_operator_code_id');
    }
}
