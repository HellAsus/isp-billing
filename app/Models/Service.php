<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    public function customers(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Customer')->withTimestamps();
    }
}
