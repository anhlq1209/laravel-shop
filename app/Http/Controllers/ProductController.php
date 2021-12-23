<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->logged = Auth::check();
    }

    public function index()
    {
        $categories = Category::all();
        return view('product', [
            'title' => 'Product',
            'categories' => $categories,
            'logged' => $this->logged
        ]);
    }
}
