<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Statistic extends Model
{
    protected $table = 'stat';
    protected $guarded = [];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'id', 'user_id');
    }

}
