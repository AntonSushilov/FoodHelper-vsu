<?php

namespace App\Http\Controllers\Admin;

use App\Dish;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dishes.index', [
        'dishes' => Dish::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dishes.create',[
            'category_id' => "",
            'title' => "",
            'info' => "",
            'composition' => "",
            'recipe' => "",
            'kcal' => "",
            'protein' => "",
            'fat' => "",
            'carbohydrate' => ""
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
        Dish::create([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'info'=>$request->info,
            'composition'=>$request->composition,
            'recipe'=>$request->recipe,
            'kcal'=>$request->kcal,
            'protein'=>$request->protein,
            'fat'=>$request->fat,
            'carbohydrate'=>$request->carbohydrate
        ]);
        return redirect()->route('admin.dish.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        //
        return view('admin.dishes.update',[
            'category_id'=>$dish->category_id,
            'title'=>$dish->title,
            'info'=>$dish->info,
            'composition'=>$dish->composition,
            'recipe'=>$dish->recipe,
            'kcal'=>$dish->kcal,
            'protein'=>$dish->protein,
            'fat'=>$dish->fat,
            'carbohydrate'=>$dish->carbohydrate,
            'id' => $dish->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        //
        $dish->update([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'info'=>$request->info,
            'composition'=>$request->composition,
            'recipe'=>$request->recipe,
            'kcal'=>$request->kcal,
            'protein'=>$request->protein,
            'fat'=>$request->fat,
            'carbohydrate'=>$request->carbohydrate
        ]);
        return redirect()->route('admin.dish.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        //
        $dish->delete();
        return redirect()->route('admin.dish.index');
    }
}
