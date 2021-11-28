<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productsController extends Controller
{
    //
    public function products()
    {
        $logged = Auth::check();

       //$categories = Category::all();
       // $products = Product::all();

        return view('products', [
            'title' => 'products',
          //  'categories' => $categories,
           // 'pproducts' => $products,
           'logged' => $logged
        ]);
    }
}
