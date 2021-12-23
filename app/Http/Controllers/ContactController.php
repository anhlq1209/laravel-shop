<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->logged = Auth::check();
    }

    public function index() {
        $categories = Category::all();

        return view('contact', [
            'title' => 'Contact',
            'categories' => $categories,
            'logged' => $this->logged
        ]);
        
    }
}
