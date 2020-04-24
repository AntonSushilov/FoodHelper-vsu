<?php

namespace App\Http\Controllers;
use App\Product;
use App\Dish;
use App\Ration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if($rations = Ration::first() === null){
            return view('user.home',[
                'rations' => 'нет данных'
            ]);
        }
        else{
            $rations = Ration::first()->paginate(15);

            return view('user.home', [
                'rations' => $rations
            ]);
        }
    }
}
