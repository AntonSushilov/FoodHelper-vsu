<?php

namespace App\Http\Controllers;

use App\Product;
use App\Dish;
use Illuminate\Http\Request;

class FoodHelperController extends Controller
{
    public function productIndex(Request $request)
    {
        $products = Product::first()->paginate(15);

        return view('products', [
            'products' => $products,
        ]);
    }

    public function productShow(Product $product)
    {

        return view('product', [
            'product' => $product,
        ]);
    }

    public function dishIndex(Request $request)
    {
        $dishes = Dish::first()->paginate(15);

        return view('dishes', [
            'dishes' => $dishes,
        ]);
    }

    public function dishShow(Dish $dish)
    {

        return view('dish', [
            'dish' => $dish,
        ]);
    }
}
