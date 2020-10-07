<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'location', 'level', 'price','downpayment','installments'
    ];
}
