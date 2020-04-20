<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function dish(){
    	return $this->belongsToMany('App\Dish', 'dish_product')->withPivot('mass');
    }

    public function ration(){
    	return $this->belongsToMany('App\Ration')->withPivot('mass','food');
    }
}
