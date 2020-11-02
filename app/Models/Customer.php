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

    public function phones(): HasMany
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

    public function devices(): HasMany
    {
        return $this->HasMany('App\Models\CustomerDevice');
    }

    public function session(): HasOne
    {
        return $this->hasOne('App\Models\Session');
    }

    public function activateTariff(int $id): self
    {
        return $this;
    }

    public function setTariff(int $id): self
    {
        $this->tariff_id = $id;
        $this->dropSession();
        $this->save();
        return $this;
    }

    public function dropSession(): self
    {
        if ($this->session) {
            $this->session->drop_session = true;
            $this->session->push();
        }
        return $this;
    }

}
