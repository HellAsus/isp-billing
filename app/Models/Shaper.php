<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shaper extends Model
{
    public function customers(): HasMany
    {
        return $this->hasMany('App\Model\Customers');
    }
}
