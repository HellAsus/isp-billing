<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Street extends Model
{
    protected $table = 'street';
    public $timestamps = false;

    public function client(): HasMany
    {
        return $this->HasMany('App\User', 'street_id', 'id');
    }
}
