<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index', [
        'products' => Product::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create',[
            'title' => "",
            'info' => "",
            'properties' => "",
            'composition' => "",
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
            Product::create([
            'title'=>$request->title,
            'info'=>$request->info,
            'properties'=>$request->properties,
            'composition'=>$request->composition,
            'kcal'=>$request->kcal,
            'protein'=>$request->protein,
            'fat'=>$request->fat,
            'carbohydrate'=>$request->carbohydrate
        ]);
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.update',[
            'title'=>$product->title,
            'info'=>$product->info,
            'properties'=>$product->properties,
            'composition'=>$product->composition,
            'kcal'=>$product->kcal,
            'protein'=>$product->protein,
            'fat'=>$product->fat,
            'carbohydrate'=>$product->carbohydrate,
            'id' => $product->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'title'=>$request->title,
            'info'=>$request->info,
            'properties'=>$request->properties,
            'composition'=>$request->composition,
            'kcal'=>$request->kcal,
            'protein'=>$request->protein,
            'fat'=>$request->fat,
            'carbohydrate'=>$request->carbohydrate
        ]);
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
