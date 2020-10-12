<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title','description','location', 'area','rooms','baths', 'price','downpayment','installments','main_image','carousal_images'
    ];
}
