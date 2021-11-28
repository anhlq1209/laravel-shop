<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class shopdetailsController extends Controller
{
    //
    public function shopdetails()
    {
        $logged = Auth::check();

       //$categories = Category::all();
       // $products = Product::all();

        return view('shopdetails', [
            'title' => 'ShopDetails',
          //  'categories' => $categories,
           // 'pproducts' => $products,
           'logged' => $logged
        ]);
    }
}
