<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tariff extends Model
{
    use SoftDeletes;

    public function customers(): HasMany
    {
        return $this->hasMany('App\Models\Customer');
    }

    public function rules(): HasMany
    {
        return $this->hasMany('App\Models\TariffRule');
    }

    public function ipPool(): HasOne
    {
        return $this->hasOne('App\Models\IpPool');
    }


    public function allowedTariffs(): array
    {
        return $this->rules()->get()->pluck('next_tariff_id')->toArray();
    }

}
