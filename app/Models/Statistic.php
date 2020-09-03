<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Statistic extends Model
{
    protected $table = 'stat';
    protected $guarded = [];

    public function client(): HasMany
    {
        return $this->hasMany('App\User', 'id', 'user_id');
    }

}
