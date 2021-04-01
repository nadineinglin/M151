<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    public function addToBasket($productId)
    {
        if (!is_array(session()->get('basket'))) {
            $basket = array();
        } 
        else {
            $basket = session()->get('basket');
        }
        $product = \App\Models\Product::all()->where('id', $productId)->first();
        array_push($basket, $product);
        session()->put('basket', $basket);
        return redirect('/basket');
    }

    public function basket()
    {
        return view('basket', ['products' => session()->get('basket')]);
    }
}
