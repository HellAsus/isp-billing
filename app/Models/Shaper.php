<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shaper extends Model
{
    public function customers(): HasMany
    {
        return $this->hasMany('App\Model\Customers');
    }
}
