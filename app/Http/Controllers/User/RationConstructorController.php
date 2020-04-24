<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Ration;
use App\Product;
use App\Food;
use App\Dish;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class RationConstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'rations' => Ration::with('user','product','dish')->where('user_id',auth()->user()->id)->get(),
            'select_rations' =>''
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.rations_constructor.create',[
            'user_id'=>"",
            'title' => "",
            'info' => "",
            'foods'=>Food::all(),
            'products'=>Product::all(),
            'dishes'=>Dish::all(),
            'categories'=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function show(Ration $ration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function edit(Ration $ration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ration $ration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ration $ration)
    {
        //
    }
}
