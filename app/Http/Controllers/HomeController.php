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
        $rations = Ration::with('user','product','dish')->where('user_id',auth()->user()->id)->get();

            return view('user.home', [
                'rations' => $rations
            ]);
    }
}
