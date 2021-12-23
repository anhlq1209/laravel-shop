<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('user.cart', [
            'title' => 'Cart',
            'categories' => $categories,
            'logged' => $this->logged
        ]);
    }
}
