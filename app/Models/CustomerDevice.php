<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CustomerDevice extends Model
{
    public function customer(): HasOne
    {
        return $this->hasOne('App\Models\Customer');
    }
}
