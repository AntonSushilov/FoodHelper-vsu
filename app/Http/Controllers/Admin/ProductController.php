<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        'products' => Product::get()
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
            'path_foto' => "",
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
        $path = $request->file('image')->store('products', 'public');
        Product::create([
            'title'=>$request->title,
            'path_foto'=>$path,
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
            'path_foto'=>$product->path_foto,
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

        unlink(storage_path('app/public/'.$product->path_foto));
        $path = $request->file('image')->store('products', 'public');
        $product->update([
            'title'=>$request->title,
            'path_foto'=>$path,
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
        unlink(storage_path('app/public/'.$product->path_foto));
        return redirect()->route('admin.product.index');
    }
}
