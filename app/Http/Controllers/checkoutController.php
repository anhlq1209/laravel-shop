<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    //
    public function Checkout()
    {
        $logged = Auth::check();

       //$categories = Category::all();
       // $products = Product::all();

        return view('checkout', [
            'title' => 'checkout',
          //  'categories' => $categories,
           // 'pproducts' => $products,
           'logged' => $logged
        ]);
    }
}
