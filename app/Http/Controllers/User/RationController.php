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

class RationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'rations' => Ration::with('user','product','dish')->where('user_id',auth()->user()->id)->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rations.create',[
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
        $ration = Ration::create([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'info'=>$request->info
        ]);

        for($i=0;$i<count($request->products1);$i++){
            $ration->product()->attach($request->products1[$i], ['mass' => $request->mass1[$i], 'food' => 'Завтрак']);
        }
        for($i=0;$i<count($request->dishes1);$i++){
            $ration->dish()->attach($request->dishes1[$i], ['food' => 'Завтрак']);
        }

        for($i=0;$i<count($request->products2);$i++){
            $ration->product()->attach($request->products2[$i], ['mass' => $request->mass2[$i], 'food' => 'Обед']);
        }
        for($i=0;$i<count($request->dishes2);$i++){
            $ration->dish()->attach($request->dishes2[$i], ['food' => 'Обед']);
        }

        for($i=0;$i<count($request->products3);$i++){
            $ration->product()->attach($request->products3[$i], ['mass' => $request->mass3[$i], 'food' => 'Ужин']);
        }
        for($i=0;$i<count($request->dishes3);$i++){
            $ration->dish()->attach($request->dishes3[$i], ['food' => 'Ужин']);
        }
        return redirect()->route('home');
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
        return view('admin.rations.update',[
            'id' => $ration->id,
            'title'=>$ration->title,
            'info'=>$ration->info,
            'products'=>Product::all(),
            'dishes'=>Dish::all(),
            'product_ration'=>$ration->product,
            'dish_ration'=>$ration->dish

        ]);
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
        $ration->update([
            'title'=>$request->title,
            'info'=>$request->info
        ]);
        $ration->product()->detach();
        $ration->dish()->detach();

        for($i=0;$i<count($request->products1);$i++){
            $ration->product()->attach($request->products1[$i], ['mass' => $request->mass1[$i], 'food' => 'Завтрак']);
        }
        for($i=0;$i<count($request->dishes1);$i++){
            $ration->dish()->attach($request->dishes1[$i], ['food' => 'Завтрак']);
        }

        for($i=0;$i<count($request->products2);$i++){
            $ration->product()->attach($request->products2[$i], ['mass' => $request->mass2[$i], 'food' => 'Обед']);
        }
        for($i=0;$i<count($request->dishes2);$i++){
            $ration->dish()->attach($request->dishes2[$i], ['food' => 'Обед']);
        }

        for($i=0;$i<count($request->products3);$i++){
            $ration->product()->attach($request->products3[$i], ['mass' => $request->mass3[$i], 'food' => 'Ужин']);
        }
        for($i=0;$i<count($request->dishes3);$i++){
            $ration->dish()->attach($request->dishes3[$i], ['food' => 'Ужин']);
        }
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ration $ration)
    {
        $ration->product()->detach();
        $ration->dish()->detach();
        $ration->delete();

        return redirect()->route('home');
    }
}
