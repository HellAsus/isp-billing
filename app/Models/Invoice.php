<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'deposit',
        'credit',
        'description',
        'user_id'
    ];
}
