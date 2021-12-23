<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function index()
    {
        
        $logged = Auth::check();

        $products = Product::all();
        $categories = Category::all();
        $productF = Product::where('featured', '=', '1')->limit(8)->get();

        return view('home', [
            'title' => 'Home',
            'categories' => $categories,
            'pproducts' => $products,
            'featureds' => $productF,
            'logged' => $logged
        ]);
    }

}
