<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function dish(){
    	return $this->belongsToMany('App\Dish')->withPivot('mass');
    }
}
