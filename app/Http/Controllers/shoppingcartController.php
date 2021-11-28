<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class shoppingcartController extends Controller
{
    //
    public function shoppingcart()
    {
        $logged = Auth::check();

       //$categories = Category::all();
       // $products = Product::all();

        return view('shoppingcart', [
            'title' => 'ShoppingCart',
          //  'categories' => $categories,
           // 'pproducts' => $products,
           'logged' => $logged
        ]);
    }
}
