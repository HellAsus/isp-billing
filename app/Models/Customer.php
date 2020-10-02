<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    protected $fillable = [
        'username',
        'full_name',
        'password',
        'deposit',
        'state',
        'ip',
        'tariff_id'
    ];

    use SoftDeletes;

    public function tariff(): BelongsTo
    {
        return $this->BelongsTo('App\Models\Tariff');
    }
    public function statistics(): HasMany
    {
        return $this->hasMany('App\Models\CustomerStatistics');
    }

    public function invoices(): HasMany
    {
        return $this->hasMany('App\Models\Invoice');
    }

    public function shaper(): HasOne
    {
        return $this->hasOne('App\Models\Shaper');
    }

    public function phone(): HasMany
    {
        return $this->hasMany('App\Models\CustomerPhone');
    }

    public function location(): HasOne
    {
        return $this->hasOne('App\Models\CustomerLocation');
    }

    public function block(): HasMany
    {
        return $this->HasMany('App\Models\CustomerBlock');
    }

    public function session(): HasOne
    {
        return $this->hasOne('App\Models\Session');
    }

}
