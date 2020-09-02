<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Street extends Model
{
    protected $table = 'street';
    public $timestamps = false;

    public function users(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'street_id', 'id');
    }
}
