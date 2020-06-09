<?php

namespace App\Http\Controllers;

use App\Product;
use App\Dish;
use App\Ration;
use Illuminate\Http\Request;

class FoodHelperController extends Controller
{
    public function productIndex(Request $request)
    {
        $error = 'null';
        if($products = Product::first() === null){
            return view('error',[
                'error'=>$error
            ]);
        }
        else{
            $products = Product::first()->paginate(12);
            return view('guest.products', [
                'products' => $products
            ]);
        }
    }

    public function productShow(Product $product)
    {

        return view('guest.product', [
            'product' => $product
        ]);
    }

    public function dishIndex(Request $request)
    {
        $error = 'null';
        if($dishes = Dish::first() === null){
            return view('error',[
                'error'=>$error
            ]);
        }
        else{
            $dishes = Dish::first()->paginate(12);

            return view('guest.dishes', [
            'dishes' => $dishes
        ]);
        }
    }

    public function dishShow(Dish $dish)
    {

        return view('guest.dish', [
            'dish' => $dish
        ]);
    }

    public function rationIndex(Request $request)
    {

        $error = 'null';
        if($rations = Ration::first() === null){
            return view('error',[
                'error'=>$error
            ]);
        }
        else{
            $rations = Ration::first()->paginate(12);

            return view('guest.rations', [
                'rations' => $rations
            ]);
        }
    }

    public function rationShow(Ration $ration)
    {

        return view('guest.ration', [
            'ration' => $ration
        ]);
    }



}
