<?php

namespace App\Http\Controllers\Admin;


use App\Dish;
use App\Category;
use App\Product;
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
        'dishes' => Dish::with('category','product')->get()
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
            'path_foto' => "",
            'info' => "",
            'recipe' => "",
            'kcal' => "",
            'protein' => "",
            'fat' => "",
            'carbohydrate' => "",
            'categories'=>Category::all(),
            'products'=>Product::all()
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
        $path = $request->file('image')->store('dishes', 'public');
        $dish = Dish::create([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'path_foto'=>$path,
            'info'=>$request->info,
            'recipe'=>$request->recipe,
            'kcal'=>$request->kcal,
            'protein'=>$request->protein,
            'fat'=>$request->fat,
            'carbohydrate'=>$request->carbohydrate,
        ]);
        if($request->products)
        {
            for($i=0;$i<count($request->products);$i++){
                if($request->products[$i] != 0)
                {
                    $dish->product()->attach($request->products[$i], ['mass' => $request->mass[$i]]);
                }

            }
        }


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
            'path_foto'=>$dish->path_foto,
            'info'=>$dish->info,
            'recipe'=>$dish->recipe,
            'kcal'=>$dish->kcal,
            'protein'=>$dish->protein,
            'fat'=>$dish->fat,
            'carbohydrate'=>$dish->carbohydrate,
            'id' => $dish->id,
            'categories'=>Category::all(),
            'products'=>Product::all(),
            'composition'=> $dish->product
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
        unlink(storage_path('app/public/'.$dish->path_foto));
        $path = $request->file('image')->store('dishes', 'public');
        $dish->update([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'path_foto'=>$path,
            'info'=>$request->info,
            'recipe'=>$request->recipe,
            'kcal'=>$request->kcal,
            'protein'=>$request->protein,
            'fat'=>$request->fat,
            'carbohydrate'=>$request->carbohydrate

        ]);

        $dish->product()->detach();

        for($i=0;$i<count($request->products);$i++){
            $dish->product()->attach($request->products[$i], ['mass' => $request->mass[$i]]);
        }
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
        $dish->product()->detach();
        $dish->delete();
        unlink(storage_path('app/public/'.$dish->path_foto));

        return redirect()->route('admin.dish.index');
    }
}
