<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerPhone extends Model
{
    protected $fillable = [
        'number',
        'phone_operator_code_id',
    ];
    public function operator(): BelongsTo
    {
        return $this->belongsTo('App\Models\PhoneOperatorCode', 'phone_operator_code_id');
    }
}
