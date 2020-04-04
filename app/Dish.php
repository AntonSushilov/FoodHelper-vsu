<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
	protected $guarded = [];
    //
    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function product(){
    	return $this->belongsToMany('App\Product')->withPivot('mass');
    }
}
