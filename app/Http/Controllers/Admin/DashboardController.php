<?php

namespace App\Http\Controllers\Admin;

use App\Food;
use App\Category;
use App\Dish;
use App\Product;
use App\User;
use App\Ration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard(){
    	$params = [
    		'userCount' => User::count(),
    		'categoriesCount' => Category::count(),
    		'dishCount' => Dish::count(),
            'productCount' => Product::count(),
            'foodCount' => Food::count(),
            'rationCount' => Ration::count()
    	];
    	return view('admin.dashboard', $params);
    }
}
