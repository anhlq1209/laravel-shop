<?php

namespace App\Http\Controllers;

//use App\Models\Category;
//use App\Models\Product;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->logged = Auth::check();
    }
    
    public function index()
    {
        $categories = Category::all();
        return view('shop', [
            'title' => 'Shop',
            'categories' => $categories,
            'logged' => $this->logged
        ]);
    }
}
