<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CustomerBlock extends Model
{

    protected $fillable = [
        'lens',
        'description',
        'increments',
        'unblock_date',
    ];

    public function customer(): HasOne
    {
        return $this->hasOne('App\Models\Customer');
    }
}
