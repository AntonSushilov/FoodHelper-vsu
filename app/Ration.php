<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ration extends Model
{
    protected $guarded = [];
    //
    public function product(){
    	return $this->belongsToMany('App\Product', 'product_ration')->withPivot('mass','food');
    }

    public function dish(){
    	return $this->belongsToMany('App\Dish', 'dish_ration')->withPivot('food');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }


}
