<?php

namespace App\Http\Controllers;

//use App\Models\Category;
//use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop', [
            'title' => 'Shop',
            'categories' => $this->categories,
            'logged' => $this->logged
        ]);
    }
}
