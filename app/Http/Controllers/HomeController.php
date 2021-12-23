<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->logged = Auth::check();
    }
    
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('home', [
            'title' => 'Home',
            'categories' => $categories,
            'pproducts' => $products,
            'logged' => $this->logged
        ]);
    }
}
